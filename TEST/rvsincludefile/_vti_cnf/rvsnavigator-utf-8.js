


// PHP Layers Menu 3.2.0-rc (C) 2001-2004 Marco Pratesi - http://www.marcopratesi.it/

DOM = (document.getElementById) ? 1 : 0;
NS4 = (document.layers) ? 1 : 0;
// We need to explicitly detect Konqueror
// because Konqueror 3 sets IE = 1 ... AAAAAAAAAARGHHH!!!
Konqueror = (navigator.userAgent.indexOf('Konqueror') > -1) ? 1 : 0;
// We need to detect Konqueror 2.2 as it does not handle the window.onresize event
Konqueror22 = (navigator.userAgent.indexOf('Konqueror 2.2') > -1 || navigator.userAgent.indexOf('Konqueror/2.2') > -1) ? 1 : 0;
Konqueror30 =
(
navigator.userAgent.indexOf('Konqueror 3.0') > -1
|| navigator.userAgent.indexOf('Konqueror/3.0') > -1
|| navigator.userAgent.indexOf('Konqueror 3;') > -1
|| navigator.userAgent.indexOf('Konqueror/3;') > -1
|| navigator.userAgent.indexOf('Konqueror 3)') > -1
|| navigator.userAgent.indexOf('Konqueror/3)') > -1
)
? 1 : 0;
Konqueror31 = (navigator.userAgent.indexOf('Konqueror 3.1') > -1 || navigator.userAgent.indexOf('Konqueror/3.1') > -1) ? 1 : 0;
// We need to detect Konqueror 3.2 and 3.3 as they are affected by the see-through effect only for 2 form elements
Konqueror32 = (navigator.userAgent.indexOf('Konqueror 3.2') > -1 || navigator.userAgent.indexOf('Konqueror/3.2') > -1) ? 1 : 0;
Konqueror33 = (navigator.userAgent.indexOf('Konqueror 3.3') > -1 || navigator.userAgent.indexOf('Konqueror/3.3') > -1) ? 1 : 0;
Opera = (navigator.userAgent.indexOf('Opera') > -1) ? 1 : 0;
Opera5 = (navigator.userAgent.indexOf('Opera 5') > -1 || navigator.userAgent.indexOf('Opera/5') > -1) ? 1 : 0;
Opera6 = (navigator.userAgent.indexOf('Opera 6') > -1 || navigator.userAgent.indexOf('Opera/6') > -1) ? 1 : 0;
Opera56 = Opera5 || Opera6;
IE = (navigator.userAgent.indexOf('MSIE') > -1) ? 1 : 0;
IE = IE && !Opera;
IE5 = IE && DOM;
IE4 = (document.all) ? 1 : 0;
IE4 = IE4 && IE && !DOM;



menuTopShift = 6;
menuRightShift = 7;
menuLeftShift = 2;

var thresholdY = 5;
var abscissaStep = 140;

toBeHidden = new Array();
toBeHiddenLeft = new Array();
toBeHiddenTop = new Array();
// List the Parent Page that contain submenu
listl = ['L2','L5'];

var numl = listl.length;

father = new Array();
// $i is the total menu including parent menu
for (i=1; i <= 11; i++) {
    father['L' + i] = '';
}

// Father keys and vals must match the child and parents values
father_keys = ['L3','L4','L6','L7','L8'];
father_vals = ['L2','L2','L5','L5','L5'];

for (i=0; i < father_keys.length; i++) {
    father[father_keys[i]] = father_vals[i];
}

lwidth = new Array();
var lwidthDetected = 0;

function moveLayers()
{
if (!lwidthDetected) {
for (i=0; i<numl; i++) {
    lwidth[listl[i]] = getOffsetWidth(listl[i]);
}
lwidthDetected = 1;
}
if (IE4) {
for (i=0; i<numl; i++) {
    setWidth(listl[i], abscissaStep);
}
}
var vermenu1TOP = getOffsetTop('vermenu1');
var vermenu1LEFT = getOffsetLeft('vermenu1');
var vermenu1WIDTH = getOffsetWidth('vermenu1');

// Add this 2 lines for each parent menu
setLeft('L2', vermenu1LEFT + vermenu1WIDTH - menuRightShift);
setLeft('L5', vermenu1LEFT + vermenu1WIDTH - menuRightShift);

}

back = new Array();
// $i is the total menu including parent menu
for (i=1; i<=11; i++) {
    back['L' + i] = 0;
}



