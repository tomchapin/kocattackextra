## Retirement

The KoC Scripters team (which includes a number of other programmers as well as myself) have now finished moving all of the most useful features of this script into KoC Power Bot, so I have decided to retire KoCAttack Extra for now. KoC Power Bot is a much more efficient framework and it is the next evolution in KoC scripts.

If someone out there would like to continue development on KoCAttack Extra for some reason or another, or if you would like to help enhance KoC Power Bot by adding new features, please just let me or another KoC Scripter team member know. We would be happy to have you join us there!

## Description

This script is intended for use with KoC Power Tools (KoC Scripters Edition) and KoC Power Bot (KoC Scripters Edition)!

This is an upgraded version of the Kingdoms of Camelot Attack helper that was published on userscripts by niknah (as of Oct. 24, 2010). His original script is located here: http://userscripts.org/scripts/show/76594

This version of the KOCAttack script has a number of extra features, however:

* Ability to add multi-wave wilderness attacks in bulk from rally point, as well as enhanced support for multi-wave wilderness attacks, across the board.

* Can automatically log you back into the game if the domain goes down for maintenance.

* Automatically help alliance members with building and researching (clicks the links for you!)

* Automatically hide all of the build/research requests and reports that constantly clutter alliance chat.

* Automatically clicks the "Share to Wall" and "Publish" button (including setting the privacy) when speeding up, building, or researching something

* Can automatically hide the "Invite Friends" popup and tab button for you, if you so desire.

* See all attacks in list on map, not just current attacks.

* Only launch attacks from city they were first launched from.

* A "View Attacks" tab/window where you can search your saved attacks and view them, delete them (one by one or in bulk) and ignore them. Works great for cresting when you need to delete wildernesses once they become owned by someone.

* Various bug fixes and minor improvements.

Important: This script is currently only supported by the Firefox web browsers. You MUST use Firefox and the Greasemonkey addon to run this script! If you attempt to install it while using Google Chrome, you will most likely get a lot of errors.

Google Code Project

This script is now being collaborated on by a couple of people, via the Google Code "kocattackextra" project. Any known and verified problems with the script should be added to the issue list there so that they can be dealt with by a developer. The Google Code URL is as follows: http://code.google.com/p/kocattackextra/

If you want to try the *absolute latest version* of this script, you can get it straight from the official Google Code project: 
http://kocattackextra.googlecode.com/svn/trunk/kocattack_-_extra_featur.user.js

How to Install

1. Install the "Greasemonkey" addon for Firefox and restart your browser.

2. Click the "Install" button here on the script page (doh!)

2. Reload the KoC facebook app.

### How to Auto Help Alliance Members

1. Click "Chat Settings" in your chat pane and make sure that "Alliance" is set as the default chat tab.

2. Open the options tab and make sure that the "Automatically help alliance members with building/researching." item is checked. Also, feel free to enable the auto-hide feature if desired (it's disabled by default).

### How to Auto Attack (via bulk add of coordinates)

Very Important: Before you attempt to automatically attack barb camps, it is absolutely vital that you have your idle knights maxed out. You need one idle knight for each level of your rally point, or else the attacks won't send properly!

1. Switch the auto attack function off, if it's not already off.

2. Go to the city that you want to send the attacks from, and click on your rally point.

3. Click on the "March Troops" button.

4. Specify the number of troops that you would like to send on *each* attack.

5. Click on the "Bulk Add Coords" button on the bottom right.

6. Choose between the "Camps" or "Wildernesses" option.

7. Copy and paste or manually enter location coordinates to attack (ie. 343,434) in the box, one on each line...

8. Click the "Bulk Add" button.

9. IMPORTANT: Do *not* click the "march" button here after adding coords! Simply close the rally point window. The attack coordinates are now set up in the system.

10. Toggle the auto attack feature on.

Note: Do NOT, I repeat, DO NOT add an excessive number of coordinates via bulk add. You shouldn't be storing more than 50-75 per city in the system. If you input more than that, it will SLOW YOUR COMPUTER DOWN. Putting more than 50-75 in the system is pointless anyways, because you can only attack so many coordinates in an hour, even with highest level rally point and fastest troops! If you are having a problem with the script running slowly, use the "Delete All Attacks" button in the options dialog and then go back and re-enter fewer coordinates.

### How to Auto Attack Wildernesses in Multiple Waves (via bulk add of coordinates)

Very Important: Before you attempt to attack wildernesses in multiple waves, it is absolutely vital that you have your idle knights maxed out. You need one idle knight for each level of your rally point, or else the attacks won't send properly and the multiple waves will get out of sync!

Also: If you are attacking wilds in multiple waves, I highly recommend that you disable any other automatic features such as auto checking reports, auto training, auto gold, and auto publish help requests (if you have KoC Toolkit). Sometimes these other features will interfere with the wave timings and/or end up closing the attack window before the wave can be properly sent. After you have finished farming for crests, simply turn the other auto features back on.

1. Switch the auto attack function off, if it's not already off.

2. Go to the city that you want to send the attacks from, and click on your rally point.

3. Click on the "March Troops" button.

4. Enter the number of supply troops and/or militiamen and/or ballistas that you want to send on the suicide run. For example, with a level 6 wilderness (100 traps), you should send 100 militiamen. Do NOT use any other troops besides supply troops, militiamen, or ballistas as your suicide wave or else it WILL NOT WORK PROPERLY LATER!

5. Click on the "Bulk add coords" button.

6. Choose the "Wildernesses" option.

7. Select the checkbox for "This is an initial suicide wave to wipe out traps on a wilderness".

8. Copy and paste or manually enter location coordinates to attack (ie. 343,434) in the box, one on each line...

9. Click on the "Bulk Add" button. You should see a confirmation alert and then the bulk add part will hide.

10. Close the Rally Point window and then open it and go to the March Troops section again.

11. Enter the troop numbers for your second wave. For example, with a level 6 wilderness, I like to send 4500 archers. I also send a single militiamen to slow down the second wave so that it doesn't pass the suicide wave while traveling. VERY IMPORTANT: Your second wave must consist of more than just supply troops, militiamen, or ballistas or else the script will get confused and think it's a suicide wave. Include a single archer in the mix if you have to so that it knows it's a normal wave.

12. Click on the "Bulk add coords" button. All of your previous coordinate settings should still be there. If you don't see them there, simply re-enter them.

13. Make sure that "Wildernesses" is checked and the suicide wave checkbox is *NOT* checked.

14. Click on the "Bulk Add" button.

15. IMPORTANT: Do *not* click the "march" button here after adding coords! Simply close the rally point window. The attack coordinates are now set up in the system.

16. Make sure that the "Wilderness" attack type is checked in the options dialog.

17. Toggle the auto attack feature on.

Note: Do NOT, I repeat, DO NOT add an excessive number of coordinates via bulk add. You shouldn't be storing more than 50-75 per city in the system. If you input more than that, it will SLOW YOUR COMPUTER DOWN. Putting more than 50-75 in the system is pointless anyways, because you can only attack so many coordinates in an hour, even with highest level rally point and fastest troops! If you are having a problem with the script running slowly, use the "Delete All Attacks" button in the options dialog and then go back and re-enter fewer coordinates.

## Other Translations

KoCAttack Extra - Italian (translated by giucas) - http://userscripts.org/scripts/show/102790

KoCAttack Extra - German (translated by PDX) - http://userscripts.org/scripts/show/98234

## Troubleshooting

Here's how to solve 99% of the errors people report with this script:

1. Install/upgrade to latest versions of Firefox and Greasemonkey. *Don't* use Chrome with this script.

2. Uninstall any previous versions of the script and/or niknah's KoCAttack script. Make sure that you have the "Also uninstall associated preferences" option checked when you do this.

3. Reinstall "KoC Attack - Extra Features" script from the script page here.

4. Click the "Reset All" button under the options tab.

5. Make SURE that you have your idle knights maxed (one idle knight per rally point level) or else the script won't properly send out attacks and will end up getting confused.

6. If the script stops launching attacks for a while, this may be because you don't have enough attack coordinates entered into the system and the script has already launched all available attacks inside its current time window. For example, if you only have 15 barbarian camp coordinates in the system, and you have the time between attacking barbarian camps set to one hour, you could easily run out of camps to attack after only 20-30 minutes, meaning nothing will be attacked during the second half of the hour! Make sure you have enough attack coordinates entered into the system so the script is always busy and never stops!

7. With that said, do NOT, I repeat, DO NOT add an excessive number of coordinates via bulk add. You shouldn't be storing more than 50-75 per city in the system. If you input more than that, it will most likely SLOW YOUR COMPUTER DOWN. Putting more than 50-75 in the system is pointless anyways, because you can only attack so many coordinates in an hour, even with highest level rally point and fastest troops! If you are having a problem with the script running slowly, use the "Delete All Attacks" button in the options dialog and then go back and re-enter fewer coordinates.

8. If you are attacking wilds in multiple waves, I highly recommend that you disable any other automatic features such as auto checking reports, auto training, auto gold, and auto publish help requests (if you have KoC Toolkit). Sometimes these other features will interfere with the wave timings and/or end up closing the attack window before the wave can be properly sent. After you have finished farming for crests, simply turn the other auto features back on.

9. If you are attempting to attack level 8 barb camps with ballista, it WILL NOT WORK unless you include another non-suicide-wave type of troop (such as a single archer) along with the ballistas. With that said, ballista are very slow (their march speed is only 100), and you would probably be better off attacking level 7 barb camps using archers (which have a march speed of 250). In other words, you can attack TWO (and a half) level 7 barb camps with archers in the time it takes you to hit a single level 8 barb camp with ballistas. This means you can get 1.75 million food with archers hitting level 7 camps instead of only 800K food from hitting a single level 8 with ballista in the same amount of time. Do I need to say more?

10. Install the "ReloadEvery" addon for firefox and use it to reload the page every couple of minutes. ReloadEvery can be downloaded here: https://addons.mozilla.org/en-us/firefox/addon/... 
For more information about ReloadEvery and how to use it properly with this script, please see the following discussion thread: http://userscripts.org/topics/69111

Let me know if you still have problems after following these steps.

To Do List

* Integrate all major functions of KoCAttack Extra into KoC Power Bot and retire KoCAttack Extra (partially done!)

### Code Contributors

niknah
Thomas Chapin
jontey
George Jetson
Fred Flintstone
DonDavici
Joe Ruddy
various others - (send me a message if you contributed in some way and would like to be listed here)

## History

-
April 7, 2013: Jontey - Fixed to detect ascended rally point

November 16, 2012: Jontey - Fix for auto refresh problem.

November 13, 2012: Tom Chapin - Removed auto updater code (since auto updater is no longer functional).

January 12, 2011: Jontey - Fix for attack_generatequeueReplaces.

November 22, 2011: Jontey - Fixed to work with kabam.com standalone. Added option to keep # of rally slots free. Removed disable invite friends popup. Added option to disable draw map icons as powerbot already has it. Other minor bugfix.

October 20, 2011: Jontey - Fix for reload on https.

August 16, 2011: Jontey - Fix for the level 12 rally point.

June 24, 2011: Jontey - Reverted an accidental change in the code which keeps two rally point slots open. Attacks should now use full rally point.

June 21, 2011: Jontey - Fixed auto publish facebook popup.

June 14, 2011: Jontey - Fix for whitescreen check. Now does not reload on gifting page. Reloadwindow will not get the alert for resend info error.

May 11, 2011: Jontey - Fixed some more issues with the whitescreen checking. Fixed an issue with troop activity not always displaying in the correct format.

Apr. 26, 2011: Jontey - Added new ability to prioritize attacks by attack type. Fixed some bugs with the checkWhiteScreen() function.

Apr. 26, 2011: Tom Chapin - Fixed the GetCurrentMapCoord() function so that it will still use the variable map x/y input fields if you are actually on the map screen, but will use the city x/y values otherwise.

Apr. 23, 2011: Jontey - Enhanced the copy/paste functionality for X/Y coordinate input fields. Fixed GetCurrentMapCoord() function so it uses current city's coordinates. Improved the KoC cheat detector detection/removal.

Apr. 10, 2011: Tom Chapin - Implemented a new variable input field in the options that lets people define what percentage of the max population they want to auto train. Reformatted the options dialog to be a little bit more friendly by explaining certain things such as auto train and auto gold with notes.

Apr. 10, 2011: Tom Chapin - Hopefully fixed the bug that was causing multiple suicide waves to be needlessly sent when cresting. Script will still send multiple suicide waves if it misses the 30 second window for launching the normal wave, though, so make sure you have your time between attacks set to less than 20 seconds when you are cresting or else the normal wave might not get sent and it will just keep on sending the suicide wave over and over!

Apr. 8, 2011: jontey - More updates to fix the problem with wild attacks changing to type barb camp. Improved method of saving attack reports.

Apr. 8, 2011: Tom Chapin - Fixed a bug in the IsFirstAttackAtLocation() function which was sometimes causing the script to send more than one wave to the same barb camp.

Apr. 8, 2011: Tom Chapin - Added a new "transport resource reserves" field to the options dialog. Now you can specify a minimum amount of resources to maintain in each city when auto-transporting!

Apr. 8, 2011: Tom Chapin - Made the location type detection a little more tolerant so that if it is unable to determine the location type by the radio boxes for some reason, it will at least attempt to keep any existing location type settings instead of just overwriting them with the default "Camp" value.

Apr. 8, 2011: Tom Chapin - Fixed a number of bugs here and there related to the new strict attack location types. Fixed auto transport so it can now work with any type of troop, not just supply troops. Fixed issue with attacks not always being sent out correctly if you only have one city enabled in the attack options (this problem was related to the fact that the script would send out all the waves and would try to change the city, but when it saw it was still on the same city it would pause).

Apr. 7, 2011: Tom Chapin - Added a location type selector to the add attack panel. Released a *major* improvement to multi-wave cresting: Script will now check to make sure a suicide wave is actually launched before it sends a normal wave! This should eliminate problems such as excess traffic throwing off your suicide waves and making you lose your more expensive troops.

Apr. 7, 2011: Tom Chapin - Fixed the Add Attack button so it will no longer let you add an attack to the system if coordinates are un-specified. Added more robust error checking for "tempAttack" errors due to invalid attacks being entered in the system.

Apr. 7, 2011: Tom Chapin - Totally over-hauled the way how suicide attacks are added and how multi-wave attacks are launched. Now you can have any type of troops specified for either wave!

Apr. 6, 2011: Tom Chapin - Customized sizzlemctwizzle's auto updater so that it doesn't use the javascript confirm box to ask if users want to update but instead uses a modal popup. Set up my own auto-update server and edited script to use it instead of the old one.

Apr. 6, 2011: Tom Chapin - Fixed a minor bug that was affecting the auto train feature.

Apr. 6, 2011: Joe Ruddy - Fixed Ignore attacks in the View attack Dialog. Removed a couple extra buttons that had no use. Added distance to the View Attacks dialog.

Apr. 5, 2011: jontey - Now clicking the "All" button in march screen will fill troops to max able to send. Added option to delete farm reports.

Apr. 2, 2011: jontey - Fix for script not refreshing. Temporarily disabled the new city switching method until we can get the kinks ironed out.

Apr. 1, 2011: jontey - Changed input troops option to not fill anything if the field is disabled. Fixed bug where delete farm function does not delete attacks. If the last city to attack from is city 1 do not change city

Apr. 1, 2011: Tom Chapin - Corrected the city switching method so that it properly skips disabled cities when running through the cycle.

Apr. 1, 2011: jontey - Fix for auto attack staying at last city after refresh. Fixed issue where white screen reload will eventually reload to one server. Fixed "view attacks" select all checkbox not working.

Mar. 31, 2011: jontey - Refresh if white screen occurs. Fixed delete attacks on "view attacks" not working

Mar. 31, 2011: Tom Chapin - Fixed problem with auto attack tabs no longer appearing with the new KoC layout. *Finally* fixed problem with auto on/off switch not working right, and implemented a new feature which makes the script resume at the last city it left off at after the window reloads.

Mar. 28, 2011: jontey - Added function to delete farm reports.

Mar. 26, 2011: jontey - Fixed auto-abandon wilds feature.

Mar. 25, 2011: jontey - Script now attempts to re-send marches with a random knight if the previously selected knight was unavailable for some reason.

Mar. 17, 2011: jontey - Update for koc latest changes in march activity indication(again...). Fix for checkstrangemagic sometimes messing up the page and not reloading.

Mar. 16, 2011: jontey - Fixed bulk add transport option. Changed method to save auto attack. Now you have to click add attack to save the attacks to the script. Clicking the "March" button will not save the attacks.

Mar. 15, 2011: jontey - Added "City" and "Transport" options to bulk add in addition to Camps and Wildernesses.

Mar. 13, 2011: jontey - Added option to unselect knight if switching from attack to scout/reassign. Fixed bug where lvl 11 rally point is not filled.

Mar. 11, 2011: jontey - Fixing the problem of having to add one archer to the mix when bulk adding. (This affects wild cresting and also lvl 8-9 barbings).

Mar. 10, 2011: jontey - Fixing the GUI to input suicide troops if 1st attack to target.(This fix does not affect auto attack, Just something to help with manual cresting until we fix the auto two waves.

Mar. 7, 2011: jontey - Fixed toggle for auto attack not responsive. Fix for troop march activity(by Niknah). Fix for camp and city times being mixed up.

Mar. 3, 2011: Thomas Chapin (and Joe Ruddy) - Implemented some of Joe Ruddy's latest bug fixes and additions, such as more options for transports. Moved the "View Attacks" tab to the right of the Auto Attack tab. Moved Import/Export button under the View Attacks window. Import/Export isn't working right now, so it's just a placeholder until functionality is fixed/finished. Fixed problem where Auto Attack On/Off toggle wouldn't always toggle correctly.

Feb. 28, 2011: jontey - Testing retry march function. Reopen attack box instead of refreshing page after encountering excess traffic error.

Feb. 25, 2011: jontey - Fix for not retrying march attack.

Feb. 24, 2011: jontey - Added function to stop auto attack on impending attack/scout (Warning it will not restart auto after the attack so use at your own risk). Cleaned up some parts of code. Rearranged check strange majick so as to better intergrate with the script. Disabled the error message for modalreplaceattack for upgraded servers.

Feb. 24, 2011: Thomas Chapin - Added home page tag and auto updater code back into the script. *Whoops*!!! Accidentally had the auto-update set to the wrong script ID. *FIXED*

Feb. 23, 2011: jontey - Added view stored attacks (Credits to Joe Ruddy). Fixing performance issue(Still work in progress).

Feb. 22, 2011: jontey - Added function to reload when detect strange majik error. Change to check for strange magik after 15 secs. Edit Readded permission line to reload after maintenance. (Removed because it was interfering with strangemajic check)

Feb. 21, 2011: jontey - Improved hide/show attack boost(Credits to Fred). Fixed troop activity screen to show knight combat skill and number of troops on march(Niknah). Removed random selection of knights(Not sure how successful it will be). **Oops forgot to check reload button (Fixed)**

Feb. 19, 2011: jontey - Fixed facebook post not publishing.

Feb. 18, 2011: jontey - Fixed "clear barb/wild/transports" button appearing twice.

Feb. 17, 2011: jontey - Updated to work with new attack box.

Feb. 16,2011: New update (courtesy of jontey) - Update to remove tracking script by koc.

Feb. 3, 2011: New update (courtesy of George Jetson) - Reload function completely re-written from scratch and "alternate reload" method removed.

Feb. 2, 2011: New updates to script provided by the esteemed George Jetson (a.k.a. Fred Flintstone) - Version number added to options dialog. Fixed problem with troop activity function.

Jan. 31, 2011: Implemented the quick bug fix for the window reloading 404 error problem that was mentioned on discussion forum.

Jan 4, 2011: Implemented a bug fix for the GetResourcesSize function (per HawaiiJoe's suggestion) in an attempt to fix the auto transport functionality.

Jan 3, 2011: Updated the domain re-login feature so that it logs into the correct domain even if the current domain is listed as temporarily down and doesn't have a "play" button next to it.

Dec. 31, 2010: Added a feature to over-ride all web browser alert messages (such as connection errors) so they are redirected to the firefox console instead of popping up and pausing all javascript on the page.

Dec. 30, 2010: Built a cross-iframe communication method so the internal iframe embedded on the app page can communicate with the higher level app page and issue commands (such as loading a different KoC page). Finished building the initial automatic domain re-login feature. Minor bug fix for issue with page reloading before city cycle was complete.

Dec. 29, 2010: Rolled back the window reload function so that it should work like the original KoCAttack. Minor optimizations to the build help request popup feature. Added new toggle switches to options panel for automatic login after disconnect, alternate reload method, and diagnostic logging. Began initial groundwork on a new feature: Automatically log back into a domain if it goes down.

Dec. 18, 2010: Minor update - changed "Keep Wilds/Abandon Wilds" option under castle to "Abandon Wilds - On/Abandon Wilds - Off".

Dec. 17, 2010: More bug fixes. Solved issue with alert error boxes popping up sometimes on page reloads. Changed the "X" function on attacks in map list so that instead of just ignoring the attack it will actually delete the attack entirely from the system. Ignoring attacks seems pointless. I'm not sure why that was even there in the first place!

Dec. 17, 2010: Improved the new reload method by adding a dynamic time variable which should help with any potential caching issues. Adjusted some of the default city switching/reload timings. Changed default idle pop setting for auto train to 75%. Added a check for the auto train so it will only attempt to train troops if there is enough slots to actually train troops at the barracks. Adjusted timings so auto training hopefully has enough time to finish before it checks for reports and starts auto attacking.

Dec. 16, 2010: Implemented a new reload method (per George Jetson's recommendation) for reloading the game window in a way that should help prevent the problem with the "To display this page, Firefox must send information that will repeat any action" confirmation alert.

Dec. 13, 2010: Improved the "Abandon Wilds" feature by adding a confirmation prompt on the toggle switch and fixing timing issues.

Dec. 12, 2010: Fixed a minor bug with the invite a friend popup remover.

Dec. 10, 2010: Minor update: Added a feature which makes the script automatically hide the annoying new "invite a friend" popups that often show up on page loads. Made it an option which can be checked in the options dialog (disabled by default). Also automatically hides the "Invite Friends" tab button.

Nov. 28, 2010: Fixed a bug that was keeping the script from sending the second wave if there was only one marching slot left at the rally point. Fixed bug with attacks being halted due to the wilderness wave timer and popups interfering with second wave. Quit playing Kingdoms of Camelot and stopped maintaining this script.

Nov. 26, 2010: Fixed a minor bug that sometimes caused the script to come to a halt if a malformed help request was displayed in alliance chat.

Nov. 22, 2010: Made it so that reports are only checked when city switches occur, and only once every minute. Added some measures to prevent city switches or page reloads from occurring if in the middle of sending a multi-wave attack on a wilderness.

Nov. 21, 2010: Fixed bug with current number of marches not being detected properly. This bug was screwing up the multi-wave wilderness attack system and was also causing the script to attempt attacks even when the rally point was full.

Nov. 13, 2010: Fixed minor issue with auto training where it sometimes would attempt to train troops but would immediately get a "not enough resources" error. Problem was fixed simply by having it train 90% of max instead of 100%.

Nov. 11, 2010: Added brand new feature so that the script automatically clicks the "Share to Wall" and "Publish" button (including setting the privacy) when speeding up, building, or researching something. Changed report deletion interval to 2 minutes instead of 5. Fixed the broken "Abandon Wilds" feature on castles.

Nov. 10, 2010: Minor script optimizations. Set up available marches lookup to occur less often and to cache the value. Added a "Delete all stored attacks" button to options screen. Changed reports parsing system so that it won't store and update attack in the system unless the attack already exists in the system. Fixed problem with script being able to calculate current rally point level if it's currently under construction. Fixed problem with available marches number incorrectly being carried over between cities. Finished integrating the "Only launch attacks from city they were first launched from" feature. Made it so that reports are checked on page refresh and approximately every 5 minutes after that, regardless of current city.

Nov. 8, 2010: Fixed problem where multi-wave attacks weren't being sent out if the rally point level was only 3. Added enhanced support for multi-wave wilderness attacks via both bulk add and manual entry. Fixed various little bugs here and there.

Nov. 5, 2010: Added basic support for bulk addition of wilderness coordinates from rally point, in addition to camp coordinates. Made is so that all previous attacks show on map list, not just active attacks. Made "Delete Attack" button more responsive. Updated verbage on Auto/No Auto buttons so that it's now "Auto - Off / Auto - On".

Nov. 4, 2010: Updated GetResourcesSize() function so that it returns proper values.

Nov. 3, 2010: Fixed problem where automated reloading of page was causing the error "To display this page, Firefox must send information that will repeat any action (such as a search or order confirmation) that was performed earlier."

Nov. 2, 2010: Added detection for removal of additional status reports such as "Kingdom does not need help" and "project has already been completed".

Nov. 1, 2010: Released initial version
