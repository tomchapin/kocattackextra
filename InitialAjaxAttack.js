// ==UserScript==
// @name             KOCAttackAJAX
// @version          0.8.6
// @namespace        noobs

// @include          *apps.facebook.com/kingdomsofcamelot*
// @include          *kingdomsofcamelot.com/*main_src.php*
// @include          *kingdomsofcamelot.com/*newgame_src.php*
// @include          *facebook.com/connect/uiserver.php*

// @require       http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js 
// ==/UserScript==

var AJAXAttack = {
	 
	update : function (rslt, params){
		if (rslt.ok) {
			/*
			Add code to save attacks here perhaps?		
			*/
			var unts = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
			
			//Set the troop count to what we sent.
			for(i = 0; i <= unts.length; i++){
				if(params["u"+i]){
					unts[i] = params["u"+i];
				}
			}
			
			var resources = [];
			
			resources[0] = params.gold;
			for(i=1; i<=4; i++){
				resources[i] = params["r"+i];
			}
			for (i = 0; i < unts.length; i++) {
				if (unts[i].value > 0) {
					seed.units["city"+params.cid]["unt"+i] = parseInt(seed.units["city"+params.cid]["unt"+i]) - unts[i].value;
				}
			}
			$("untqueue_list").show(); //This is supposed to show the troop activity bar but can't seem to get it to work
			//Not reqiured because we are not using GUI
			//unsafeWindow.Modal.hideModalAll();
			
			//Set's knight to marching so we don't reuse the knight
			if (parseInt(params.kid) != 0) {
				seed.knights["city" + params.cid]["knt" + params.kid].knightStatus = 10
			}
			var timediff = parseInt(rslt.eta) - parseInt(rslt.initTS);
			var ut = unixtime();
			//This function adds the attack to seed.queue_atkp
			//Perhaps instead of getting the troop march to show use a powertools popup?
			unsafeWindow.attack_addqueue(rslt.marchId, rslt.marchUnixTime, ut + timediff, params.xcoord, params.ycoord, unts, params.type, params.kid, resources, rslt.tileId, rslt.tileType, rslt.tileLevel);
			//Update seed if need be
			if (rslt.updateSeed) {
				unsafeWindow.update_seed(rslt.updateSeed)
			}
		} else {
			Modal.showAlert(printLocalError((rslt.error_code || null), (rslt.msg || null), (rslt.feedback || null)))
		}
	},

	e_ajaxDone : function (rslt, params){
		var t = AJAXAttack;
		if (rslt.ok){
			GM_log ('Success ' + rslt.marchId);//Print marchId 
		} else {
			GM_log ('Error '+rslt.msg); //Print error message
		}
		t.update(rslt, params);
	},
	  
	ajaxattack : function (city, type, knightid, xcoord, ycoord, troop, gold, res, items, notify){
		var params = unsafeWindow.Object.clone(unsafeWindow.g_ajaxparams);
		params.cid = city;
		params.type = type;
		params.kid = knightid;
		params.xcoord = xcoord;
		params.ycoord = ycoord;
		for(k in troop){
			params["u"+k] = troop[k];
			params.gold = gold;
		}
		for(k in res){
			params["r"+k] = res[k];
		}
		for(k in items){
			params.items += items[k];
		}
		
		new MyAjaxRequest(unsafeWindow.g_ajaxpath + "ajax/march.php" + unsafeWindow.g_ajaxsuffix, {
			method: "post",
			parameters: params,
			onSuccess: function (rslt) {
				if (notify){
					notify (rslt, params);
				}
			},
			onFailure: function (rslt) {
				if (notify) {
					notify (rslt, params);
				}
			}
		});
	},
}

	
//Borrowed George's ajax code here. Hope he doesn't mind
function MyAjaxRequest (url, o, noRetryX){
	var opts = unsafeWindow.Object.clone(o);
	var wasSuccess = o.onSuccess;
	var wasFailure = o.onFailure;
	var retry = 0;
	var delay = 5;
	var noRetry = noRetry===true?true:false;
	opts.onSuccess = mySuccess;
	opts.onFailure = myFailure;

	new AjaxRequest(url, opts);
	return;

	function myRetry(){
		++retry;
		new AjaxRequest(url, opts);
		delay = delay * 1.25;
	}
	
	function myFailure(){
		var o = {};
		o.ok = false;
		o.errorMsg = "AJAX Communication Failure";
		wasFailure (o);
	}
	
	function mySuccess (msg){
		var rslt = eval("(" + msg.responseText + ")");
		var x;
		if (window.EmulateAjaxError){
			rslt.ok = false;  
			rslt.error_code=8;
		}
		if (rslt.ok){
			if (rslt.updateSeed){
				unsafeWindow.update_seed(rslt.updateSeed);
			}
			wasSuccess (rslt);
			return;
		}
		rslt.errorMsg = unsafeWindow.printLocalError((rslt.error_code || null), (rslt.msg || null), (rslt.feedback || null));
		if ( (x = rslt.errorMsg.indexOf ('<br><br>')) > 0){
			rslt.errorMsg = rslt.errorMsg.substr (0, x-1);
		}
		if (!noRetry && (rslt.error_code==0 ||rslt.error_code==8 || rslt.error_code==1 || rslt.error_code==3)){
			dialogRetry (rslt.errorMsg, delay, function(){myRetry()}, function(){wasSuccess (rslt)});
		} else {
			wasSuccess (rslt);
		}
	}
	
}

function AjaxRequest (url, opts){
	var headers = {
	'X-Requested-With': 'XMLHttpRequest',
	'X-Prototype-Version': '1.6.1',
	'Accept': 'text/javascript, text/html, application/xml, text/xml, */*'
	};
	var ajax = null;
    
	if (window.XMLHttpRequest){
		ajax=new XMLHttpRequest();
	} else {
		ajax=new ActiveXObject("Microsoft.XMLHTTP");
	}
  
	if (opts.method==null || opts.method==''){
		method = 'GET';
	} else {
		method = opts.method.toUpperCase();  
	}
  
	if (method == 'POST'){
		headers['Content-type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
	} else if (method == 'GET'){
		addUrlArgs (url, opts.parameters);
	}

	ajax.onreadystatechange = function(){
		//  ['Uninitialized', 'Loading', 'Loaded', 'Interactive', 'Complete']; states 0-4
		if (ajax.readyState==4) {
			if (ajax.status >= 200 && ajax.status < 305) {
				if (opts.onSuccess) { opts.onSuccess(ajax) };
			} else {
				if (opts.onFailure) { opts.onFailure(ajax) };
			}
		} else {
			if (opts.onChange) { opts.onChange (ajax) };
		}
	}  
    
	ajax.open(method, url, true);   // always async!

	for (var k in headers){
		ajax.setRequestHeader (k, headers[k]);
	}
	if (matTypeof(opts.requestHeaders)=='object'){
		for (var k in opts.requestHeaders){
			ajax.setRequestHeader (k, opts.requestHeaders[k]);
		}
	}
      
	if (method == 'POST'){
		var a = [];
		for (k in opts.parameters){
			a.push (k +'='+ opts.parameters[k] );
		}
		ajax.send (a.join ('&'));
	} else {
		ajax.send();
	}
  
}   

function matTypeof (v){
	if (typeof (v) == 'object'){
		if (!v){
			return 'null';
		// } else if (unsafeWindow.Object.prototype.toString.apply(v) === '[object Array]') {
		}else if (v.constructor.toString().indexOf("Array")>=0 && typeof(v.splice)=='function'){
			return 'array';
		}else{
			return 'object';
		}
	}
	return typeof (v);
}

function unixtime (){
	return parseInt (new Date().getTime() / 1000) + unsafeWindow.g_timeoff;
}


var CityId = 31678;
var Type = 4;
var KnightId = 112915;
var XCoord = 273;
var YCoord = 703;
var troop = [];
troop[6] = 47000; //Set to 47k archers as default
var gold = 0;
var res = []; //Set resources only if type 0 or 1
for(i=1; i<=4; i++){
	res[i] = 0;
}
var items = ''; //Optional - need someone with the money to test this out lol

var seed = unsafeWindow.seed;
setTimeout(function(){AJAXAttack.ajaxattack(CityId, Type, KnightId, XCoord, YCoord, troop, gold, res, items, AJAXAttack.e_ajaxDone);}, 10000);

//&cid=31678&type=4&kid=112915&xcoord=273&ycoord=703&u6=46000&gold=0&r1=0&r2=0&r3=0&r4=0&items=
//parseInt(seed.resources["city" + currentcityid].rec1[0] / 3600)
	// new: 0=transport, 1=reinforce, 2=scout, 3=attack, 4=reassign,
