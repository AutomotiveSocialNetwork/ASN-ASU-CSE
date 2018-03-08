<!DOCTYPE html>
<!-- saved from url=(0029)https://files.000webhost.com/ -->
<html lang="en" data-ng-app="FileManagerApp" class="ng-scope"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
  <!--
    * Angular FileManager v1.5.1 (https://github.com/joni2back/angular-filemanager)
    * Jonas Sciangula Street <joni2back@gmail.com>
    * Licensed under MIT (https://github.com/joni2back/angular-filemanager/blob/master/LICENSE)
  -->
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  
  <title>000webhost File Manager</title>

  <!-- third party -->
    <script src="./DbOperations_files/angular.min.js.download"></script>
    <script src="./DbOperations_files/angular-translate.min.js.download"></script>
    <script src="./DbOperations_files/ng-file-upload.min.js.download"></script>
    <script src="./DbOperations_files/jquery.min.js.download"></script>
    <script src="./DbOperations_files/bootstrap.min.js.download"></script>
    <script src="./DbOperations_files/utf8.js.download"></script>
    <link rel="stylesheet" href="./DbOperations_files/bootstrap.min.css">
    <script type="text/javascript" src="./DbOperations_files/ace.js.download"></script><style id="ace_editor.css">.ace_editor {position: relative;overflow: hidden;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;box-sizing: border-box;min-width: 100%;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;text-indent: -1em;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: inherit;color: inherit;z-index: 1000;opacity: 1;text-indent: 0;}[ace_nocontext=true] {transform: none!important;filter: none!important;perspective: none!important;clip-path: none!important;mask : none!important;contain: none!important;perspective: none!important;mix-blend-mode: initial!important;z-index: auto;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;}.ace_text-layer {font: inherit !important;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_smooth-blinking .ace_cursor {transition: opacity 0.18s;}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;box-sizing: border-box;}.ace_line .ace_fold {box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_inline_button {border: 1px solid lightgray;display: inline-block;margin: -1px 8px;padding: 0 5px;pointer-events: auto;cursor: pointer;}.ace_inline_button:hover {border-color: gray;background: rgba(200,200,200,0.2);display: inline-block;pointer-events: auto;}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_text-input-ios {position: absolute !important;top: -100000px !important;left: -100000px !important;}
/*# sourceURL=ace/css/ace_editor.css */</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style>
    <script type="text/javascript" src="./DbOperations_files/ui-ace.js.download"></script>
    <script type="text/javascript" src="./DbOperations_files/ext-language_tools.js.download"></script><style>.ace_snippet-marker {    -moz-box-sizing: border-box;    box-sizing: border-box;    background: rgba(194, 193, 208, 0.09);    border: 1px dotted rgba(211, 208, 235, 0.62);    position: absolute;}</style><style>.ace_editor.ace_autocomplete .ace_marker-layer .ace_active-line {    background-color: #CAD6FA;    z-index: 1;}.ace_editor.ace_autocomplete .ace_line-hover {    border: 1px solid #abbffe;    margin-top: -1px;    background: rgba(233,233,253,0.4);}.ace_editor.ace_autocomplete .ace_line-hover {    position: absolute;    z-index: 2;}.ace_editor.ace_autocomplete .ace_scroller {   background: none;   border: none;   box-shadow: none;}.ace_rightAlignedText {    color: gray;    display: inline-block;    position: absolute;    right: 4px;    text-align: right;    z-index: -1;}.ace_editor.ace_autocomplete .ace_completion-highlight{    color: #000;    text-shadow: 0 0 0.01em;}.ace_editor.ace_autocomplete {    width: 280px;    z-index: 200000;    background: #fbfbfb;    color: #444;    border: 1px lightgray solid;    position: fixed;    box-shadow: 2px 3px 5px rgba(0,0,0,.2);    line-height: 1.4;}</style>
    <script type="text/javascript" src="./DbOperations_files/ext-modelist.js.download"></script>
  <!-- /third party -->

  <!-- Comment if you need to use raw source code -->
    <link href="./DbOperations_files/angular-filemanager.min.css" rel="stylesheet">
    <script src="./DbOperations_files/angular-filemanager.min.js.download"></script>
  <!-- /Comment if you need to use raw source code -->

  <script type="text/javascript">
    //example to override angular-filemanager default config
    angular.module('FileManagerApp').config(['fileManagerConfigProvider', function (config) {
      var defaults = config.$get();
      config.set({
        appName: 'File Manager',
        theme: ('000webhost').toLocaleLowerCase(),
        pickCallback: function(item) {
          var msg = 'Picked %s "%s" for external use'
            .replace('%s', item.type)
            .replace('%s', item.fullPath());
          window.alert(msg);
        },

        allowedActions: angular.extend(defaults.allowedActions, {
          pickFiles: false,
          pickFolders: false,
        }),
      });
    }]);
  </script>
<script src="./DbOperations_files/theme-chrome.js.download"></script><script src="./DbOperations_files/mode-html.js.download"></script><style id="ace-chrome">.ace-chrome .ace_gutter {background: #ebebeb;color: #333;overflow : hidden;}.ace-chrome .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-chrome {background-color: #FFFFFF;color: black;}.ace-chrome .ace_cursor {color: black;}.ace-chrome .ace_invisible {color: rgb(191, 191, 191);}.ace-chrome .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-chrome .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-chrome .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-chrome .ace_invalid {background-color: rgb(153, 0, 0);color: white;}.ace-chrome .ace_fold {}.ace-chrome .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-chrome .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-chrome .ace_support.ace_type,.ace-chrome .ace_support.ace_class.ace-chrome .ace_support.ace_other {color: rgb(109, 121, 222);}.ace-chrome .ace_variable.ace_parameter {font-style:italic;color:#FD971F;}.ace-chrome .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-chrome .ace_comment {color: #236e24;}.ace-chrome .ace_comment.ace_doc {color: #236e24;}.ace-chrome .ace_comment.ace_doc.ace_tag {color: #236e24;}.ace-chrome .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-chrome .ace_variable {color: rgb(49, 132, 149);}.ace-chrome .ace_xml-pe {color: rgb(104, 104, 91);}.ace-chrome .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-chrome .ace_heading {color: rgb(12, 7, 255);}.ace-chrome .ace_list {color:rgb(185, 6, 144);}.ace-chrome .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-chrome .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-chrome .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-chrome .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-chrome .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-chrome .ace_gutter-active-line {background-color : #dcdcdc;}.ace-chrome .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-chrome .ace_storage,.ace-chrome .ace_keyword,.ace-chrome .ace_meta.ace_tag {color: rgb(147, 15, 128);}.ace-chrome .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-chrome .ace_string {color: #1A1AA6;}.ace-chrome .ace_entity.ace_other.ace_attribute-name {color: #994409;}.ace-chrome .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-chrome */</style><script src="./DbOperations_files/mode-php.js.download"></script></head>

<body class="modal-open">
  <div class="user-container container-fluid ng-scope" ng-controller="UserController as user">
    <!-- ngIf: user.status && user.loading == 0 --><angular-filemanager ng-if="user.status &amp;&amp; user.loading == 0" class="ng-scope"><div ng-controller="FileManagerCtrl" ngf-drop="addForUpload($files)" ngf-drag-over-class="&#39;upload-dragover&#39;" ngf-multiple="true" class="file-manager-container ng-scope">
    <!-- ngInclude: config.tplPath + '/navbar.html' --><div ng-include="config.tplPath + &#39;/navbar.html&#39;" class="ng-scope"><nav class="navbar navbar-inverse ng-scope">
    <div class="container-fluid">

        <div class="row visible-xs" style="line-height:30px;">
            <div class="col-md-12">
                <div class="pull-left" style="line-height: 54px;" ng-show="&#39;000webhost&#39; == config.theme"><img class="logo" src="./DbOperations_files/logo.png" alt="logo" title="000webhost" height="34px"></div>
                <div class="pull-right text-sm">
                    <!-- ngInclude: config.tplPath + '/current-folder-breadcrumb.html' --><div ng-include="config.tplPath + &#39;/current-folder-breadcrumb.html&#39;" ng-show="config.breadcrumb" class="ng-scope"><ol class="breadcrumb ng-scope">
    <li>
        <a href="https://files.000webhost.com/" ng-click="fileNavigator.goTo(-1)" class="ng-binding">
            asnasucse18
        </a>
    </li>
    <!-- ngRepeat: (key, dir) in fileNavigator.currentPath track by key --><li ng-repeat="(key, dir) in fileNavigator.currentPath track by key" ng-class="{&#39;active&#39;:$last}" class="animated fast fadeIn ng-scope">
        <a href="https://files.000webhost.com/" ng-show="!$last" ng-click="fileNavigator.goTo(key)" class="ng-binding">
            public_h...
        </a>
        <span ng-show="$last" class="ng-binding ng-hide">
            public_html
        </span>
    </li><!-- end ngRepeat: (key, dir) in fileNavigator.currentPath track by key --><li ng-repeat="(key, dir) in fileNavigator.currentPath track by key" ng-class="{&#39;active&#39;:$last}" class="animated fast fadeIn ng-scope">
        <a href="https://files.000webhost.com/" ng-show="!$last" ng-click="fileNavigator.goTo(key)" class="ng-binding">
            Android
        </a>
        <span ng-show="$last" class="ng-binding ng-hide">
            Android
        </span>
    </li><!-- end ngRepeat: (key, dir) in fileNavigator.currentPath track by key --><li ng-repeat="(key, dir) in fileNavigator.currentPath track by key" ng-class="{&#39;active&#39;:$last}" class="animated fast fadeIn ng-scope active">
        <a href="https://files.000webhost.com/" ng-show="!$last" ng-click="fileNavigator.goTo(key)" class="ng-binding ng-hide">
            includes
        </a>
        <span ng-show="$last" class="ng-binding">
            includes
        </span>
    </li><!-- end ngRepeat: (key, dir) in fileNavigator.currentPath track by key -->
</ol></div>

                </div>
            </div>
        </div>

        <div class="navbar-header" style="float:left">
            <button type="button" id="header-menu-button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-6 hidden-xs">
                <img class="pull-left logo" src="./DbOperations_files/logo.png" alt="logo" title="000webhost" ng-show="&#39;000webhost&#39; == config.theme">
                <div ng-show="!config.breadcrumb" class="ng-hide">
                    <a class="navbar-brand hidden-xs ng-binding" href="https://files.000webhost.com/">angular-filemanager</a>
                </div>
                <!-- ngInclude: config.tplPath + '/current-folder-breadcrumb.html' --><div ng-include="config.tplPath + &#39;/current-folder-breadcrumb.html&#39;" ng-show="config.breadcrumb" class="ng-scope"><ol class="breadcrumb ng-scope">
    <li>
        <a href="https://files.000webhost.com/" ng-click="fileNavigator.goTo(-1)" class="ng-binding">
            asnasucse18
        </a>
    </li>
    <!-- ngRepeat: (key, dir) in fileNavigator.currentPath track by key --><li ng-repeat="(key, dir) in fileNavigator.currentPath track by key" ng-class="{&#39;active&#39;:$last}" class="animated fast fadeIn ng-scope">
        <a href="https://files.000webhost.com/" ng-show="!$last" ng-click="fileNavigator.goTo(key)" class="ng-binding">
            public_h...
        </a>
        <span ng-show="$last" class="ng-binding ng-hide">
            public_html
        </span>
    </li><!-- end ngRepeat: (key, dir) in fileNavigator.currentPath track by key --><li ng-repeat="(key, dir) in fileNavigator.currentPath track by key" ng-class="{&#39;active&#39;:$last}" class="animated fast fadeIn ng-scope">
        <a href="https://files.000webhost.com/" ng-show="!$last" ng-click="fileNavigator.goTo(key)" class="ng-binding">
            Android
        </a>
        <span ng-show="$last" class="ng-binding ng-hide">
            Android
        </span>
    </li><!-- end ngRepeat: (key, dir) in fileNavigator.currentPath track by key --><li ng-repeat="(key, dir) in fileNavigator.currentPath track by key" ng-class="{&#39;active&#39;:$last}" class="animated fast fadeIn ng-scope active">
        <a href="https://files.000webhost.com/" ng-show="!$last" ng-click="fileNavigator.goTo(key)" class="ng-binding ng-hide">
            includes
        </a>
        <span ng-show="$last" class="ng-binding">
            includes
        </span>
    </li><!-- end ngRepeat: (key, dir) in fileNavigator.currentPath track by key -->
</ol></div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="navbar-collapse">
                    <div class="navbar-form navbar-right text-right">
                        <button class="btn btn-flat btn-sm" ng-show="config.allowedActions.createFile" ng-click="modal(&#39;newfile&#39;) &amp;&amp; prepareNewFile()" title="New File">
                            <i class="glyphicon glyphicon-file"></i>
                            <i class="glyphicon glyphicon-plus on-top-glyph-plus"></i>
                        </button>
                        <button class="btn btn-flat btn-sm" ng-show="config.allowedActions.createFolder" ng-click="modal(&#39;newfolder&#39;) &amp;&amp; prepareNewFolder()" title="New folder">
                            <i class="glyphicon glyphicon-folder-open"></i>
                            <i class="glyphicon glyphicon-plus on-top-glyph-plus"></i>
                        </button>

                        <div class="btn-group">
                            <button class="btn btn-flat btn-sm dropdown-toggle" type="button" id="dropDownMenuSearch" data-toggle="dropdown" aria-expanded="true">
                                <i class="glyphicon glyphicon-search mr2"></i>
                            </button>
                            <div class="dropdown-menu animated fast fadeIn pull-right" role="menu" aria-labelledby="dropDownMenuLang">
                                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-show="config.searchForm" placeholder="Search..." ng-model="$parent.query">
                            </div>
                        </div>

                        <button class="btn btn-flat btn-sm" ng-click="modal(&#39;uploadfiledialog&#39;)" title="Upload files">
                            <i class="glyphicon glyphicon-cloud-upload"></i>
                        </button>

                        <button class="btn btn-flat btn-sm" ng-click="fileNavigator.refresh()" title="Reload File List">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </button>

                        <button class="btn btn-flat btn-sm" ng-click="$parent.setTemplate(&#39;main-icons.html&#39;)" ng-show="$parent.viewTemplate !==&#39;main-icons.html&#39;" title="Icons">
                            <i class="glyphicon glyphicon-th-large"></i>
                        </button>

                        <button class="btn btn-flat btn-sm ng-hide" ng-click="$parent.setTemplate(&#39;main-table.html&#39;)" ng-show="$parent.viewTemplate !==&#39;main-table.html&#39;" title="List">
                            <i class="glyphicon glyphicon-th-list"></i>
                        </button>

                        <div class="btn-group">
                            <button class="btn btn-flat btn-sm dropdown-toggle" type="button" id="dropDownMenuLang" data-toggle="dropdown" aria-expanded="true">
                                <i class="glyphicon glyphicon-globe mr2"></i>
                            </button>

                            <ul class="dropdown-menu scrollable-menu animated fast fadeIn pull-right" role="menu" aria-labelledby="dropDownMenuLang">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;en&#39;)" class="ng-binding">English</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;zh&#39;)" class="ng-binding">Chinese</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;es&#39;)" class="ng-binding">Spanish</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;pt&#39;)" class="ng-binding">Portuguese</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;fr&#39;)" class="ng-binding">French</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;de&#39;)" class="ng-binding">German</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;he&#39;)" class="ng-binding">Hebrew</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;sk&#39;)" class="ng-binding">Slovak</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;ru&#39;)" class="ng-binding">Russian</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;ua&#39;)" class="ng-binding">Ukrainian</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;tr&#39;)" class="ng-binding">Turkish</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;fa&#39;)" class="ng-binding">Persian</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://files.000webhost.com/" ng-click="changeLanguage(&#39;pl&#39;)" class="ng-binding">Polish</a></li>
                            </ul>
                        </div>


                        <button class="btn btn-flat btn-sm" ng-click="$parent.logout()" title="Log out">
                            <i class="glyphicon glyphicon-off"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
</div>

    <div class="container-fluid">

        <div class="row">
            <!-- ngInclude: config.tplPath + '/sidebar.html' --><div class="col-sm-4 col-md-3 sidebar file-tree animated slow fadeIn ng-scope" id="left-sidebar-container" ng-include="config.tplPath + &#39;/sidebar.html&#39;" ng-show="config.sidebar &amp;&amp; fileNavigator.history[0]"><ul class="nav nav-sidebar file-tree-root ng-scope">
    <!-- ngRepeat: item in fileNavigator.history --><!-- ngInclude: 'folder-branch-item' --><li ng-repeat="item in fileNavigator.history" ng-include="&#39;folder-branch-item&#39;" ng-class="{&#39;active&#39;: item.name == fileNavigator.currentPath.join(&#39;/&#39;)}" class="ng-scope">
    <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown ng-binding ng-scope">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right ng-hide" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2 ng-hide" ng-show="!isInThisPath(item.name)"></i>
        /
    </a>
    <ul class="nav nav-sidebar ng-scope">
        <!-- ngRepeat: item in item.nodes --><!-- ngInclude: 'folder-branch-item' --><li ng-repeat="item in item.nodes" ng-include="&#39;folder-branch-item&#39;" ng-class="{&#39;active&#39;: item.name == fileNavigator.currentPath.join(&#39;/&#39;)}" class="ng-scope">
    <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown ng-binding ng-scope">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right ng-hide" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2 ng-hide" ng-show="!isInThisPath(item.name)"></i>
        public_html
    </a>
    <ul class="nav nav-sidebar ng-scope">
        <!-- ngRepeat: item in item.nodes --><!-- ngInclude: 'folder-branch-item' --><li ng-repeat="item in item.nodes" ng-include="&#39;folder-branch-item&#39;" ng-class="{&#39;active&#39;: item.name == fileNavigator.currentPath.join(&#39;/&#39;)}" class="ng-scope">
    <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown ng-binding ng-scope">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right ng-hide" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2 ng-hide" ng-show="!isInThisPath(item.name)"></i>
        Android
    </a>
    <ul class="nav nav-sidebar ng-scope">
        <!-- ngRepeat: item in item.nodes --><!-- ngInclude: 'folder-branch-item' --><li ng-repeat="item in item.nodes" ng-include="&#39;folder-branch-item&#39;" ng-class="{&#39;active&#39;: item.name == fileNavigator.currentPath.join(&#39;/&#39;)}" class="ng-scope active">
    <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown ng-binding ng-scope">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right ng-hide" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2 ng-hide" ng-show="!isInThisPath(item.name)"></i>
        includes
    </a>
    <ul class="nav nav-sidebar ng-scope">
        <!-- ngRepeat: item in item.nodes -->
    </ul>
</li><!-- end ngRepeat: item in item.nodes --><!-- ngInclude: 'folder-branch-item' --><li ng-repeat="item in item.nodes" ng-include="&#39;folder-branch-item&#39;" ng-class="{&#39;active&#39;: item.name == fileNavigator.currentPath.join(&#39;/&#39;)}" class="ng-scope">
    <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown ng-binding ng-scope">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down ng-hide" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2 ng-hide" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2" ng-show="!isInThisPath(item.name)"></i>
        v1
    </a>
    <ul class="nav nav-sidebar ng-scope">
        <!-- ngRepeat: item in item.nodes -->
    </ul>
</li><!-- end ngRepeat: item in item.nodes -->
    </ul>
</li><!-- end ngRepeat: item in item.nodes -->
    </ul>
</li><!-- end ngRepeat: item in item.nodes --><!-- ngInclude: 'folder-branch-item' --><li ng-repeat="item in item.nodes" ng-include="&#39;folder-branch-item&#39;" ng-class="{&#39;active&#39;: item.name == fileNavigator.currentPath.join(&#39;/&#39;)}" class="ng-scope">
    <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown ng-binding ng-scope">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down ng-hide" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2 ng-hide" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2" ng-show="!isInThisPath(item.name)"></i>
        tmp
    </a>
    <ul class="nav nav-sidebar ng-scope">
        <!-- ngRepeat: item in item.nodes -->
    </ul>
</li><!-- end ngRepeat: item in item.nodes -->
    </ul>
</li><!-- end ngRepeat: item in fileNavigator.history -->
</ul>

<script type="text/ng-template" id="folder-branch-item" class="ng-scope">
    <a href="" ng-click="fileNavigator.folderClick(item.item)" class="animated fast fadeInDown">

        <span class="point">
            <i class="glyphicon glyphicon-chevron-down" ng-show="isInThisPath(item.name)"></i>
            <i class="glyphicon glyphicon-chevron-right" ng-show="!isInThisPath(item.name)"></i>
        </span>

        <i class="glyphicon glyphicon-folder-open mr2" ng-show="isInThisPath(item.name)"></i>
        <i class="glyphicon glyphicon-folder-close mr2" ng-show="!isInThisPath(item.name)"></i>
        {{ (item.name.split('/').pop() || '/') | strLimit : 30 }}
    </a>
    <ul class="nav nav-sidebar">
        <li ng-repeat="item in item.nodes" ng-include="'folder-branch-item'" ng-class="{'active': item.name == fileNavigator.currentPath.join('/')}"></li>
    </ul>
</script></div>

            <div class="main col-sm-8 col-md-9" ng-class="config.sidebar &amp;&amp; fileNavigator.history[0] &amp;&amp; &#39;col-sm-8 col-md-9&#39;">
                <div ng-show="temps.length &gt; 1 &amp;&amp; selection" class="top-action-meniu ng-hide">
                    <!-- ngInclude: config.tplPath + '/action-meniu.html' --><ul class="ng-scope" role="menu" aria-labelledby="dropdownMenu" ng-include="config.tplPath + &#39;/action-meniu.html&#39;"><li ng-show="singleSelection() &amp;&amp; singleSelection().isFolder()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="smartClick(singleSelection())">
        <i class="glyphicon glyphicon-folder-open"></i> <div class="ng-binding"> Open </div>
    </a>
</li>

<li ng-show="config.pickCallback &amp;&amp; singleSelection() &amp;&amp; singleSelection().isSelectable()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="config.pickCallback(singleSelection().model)">
        <i class="glyphicon glyphicon-hand-up"></i> <div class="ng-binding"> Select this </div>
    </a>
</li>

<li ng-show="config.allowedActions.download &amp;&amp; !selectionHas(&#39;dir&#39;) &amp;&amp; singleSelection()" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="download()">
        <i class="glyphicon glyphicon-cloud-download"></i> <div class="ng-binding"> Download </div>
    </a>
</li>

<li ng-show="config.allowedActions.downloadMultiple &amp;&amp; !selectionHas(&#39;dir&#39;) &amp;&amp; !singleSelection()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="download()">
        <i class="glyphicon glyphicon-cloud-download"></i> <div class="ng-binding"> Download as ZIP </div>
    </a>
</li>

<li ng-show="config.allowedActions.preview &amp;&amp; singleSelection().isImage() &amp;&amp; singleSelection()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="openImagePreview()">
        <i class="glyphicon glyphicon-picture"></i> <div class="ng-binding"> Preview </div>
    </a>
</li>

<li ng-show="singleSelection() &amp;&amp; canOpenInNewTab() &amp;&amp; &#39;000webhost&#39; == config.theme" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="openInNewTab()">
        <i class="glyphicon glyphicon-file"></i> <div class="ng-binding"> View </div>
    </a>
</li>

<li ng-show="config.allowedActions.rename &amp;&amp; singleSelection()" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;rename&#39;)">
        <i class="glyphicon glyphicon-edit"></i> <div class="ng-binding"> Rename </div>
    </a>
</li>

<li ng-show="config.allowedActions.move" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modalWithPathSelector(&#39;move&#39;)">
        <i class="glyphicon glyphicon-arrow-right"></i> <div class="ng-binding"> Move </div>
    </a>
</li>

<li ng-show="config.allowedActions.copy" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modalWithPathSelector(&#39;copy&#39;)">
        <i class="glyphicon glyphicon-log-out"></i> <div class="ng-binding"> Copy </div>
    </a>
</li>

<li ng-show="config.allowedActions.edit &amp;&amp; singleSelection() &amp;&amp; singleSelection().isEditable()" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="openEditItem()">
        <i class="glyphicon glyphicon-pencil"></i> <div class="ng-binding"> Edit </div>
    </a>
</li>

<li ng-show="config.allowedActions.changePermissions" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;changepermissions&#39;)">
        <i class="glyphicon glyphicon-lock"></i> <div class="ng-binding"> Permissions </div>
    </a>
</li>

<li ng-show="config.allowedActions.compress" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;compress&#39;)">
        <i class="glyphicon glyphicon-compressed"></i> <div class="ng-binding"> Compress </div>
    </a>
</li>

<li ng-show="config.allowedActions.extract &amp;&amp; singleSelection() &amp;&amp; singleSelection().isExtractable()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;extract&#39;)">
        <i class="glyphicon glyphicon-export"></i> <div class="ng-binding"> Extract </div>
    </a>
</li>

<li class="divider ng-scope" ng-show="config.allowedActions.remove"></li>

<li ng-show="config.allowedActions.remove" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;remove&#39;)">
        <i class="glyphicon glyphicon-trash"></i> <div class="ng-binding"> Delete </div>
    </a>
</li></ul>
                </div>
                <!-- ngInclude: config.tplPath + '/' + viewTemplate --><div ng-include="config.tplPath + &#39;/&#39; + viewTemplate" class="clearfix ng-scope"><table class="table mb0 table-files noselect ng-scope">
    <thead>
        <tr>
            <th class="text-center">
                <input class="file-select-all" type="checkbox" ng-checked="temps.length == $parent.fileList.length" ng-click="selectAll($parent.fileList)">
            </th>
            <th>
                <a href="https://files.000webhost.com/" ng-click="order(&#39;model.name&#39;)" class="ng-binding">
                    Name
                    <span class="sortorder" ng-show="predicate[1] === &#39;model.name&#39;" ng-class="{reverse:reverse}"></span>
                </a>
            </th>
            <th class="hidden-xs" ng-hide="config.hideSize">
                <a href="https://files.000webhost.com/" ng-click="order(&#39;model.size&#39;)" class="ng-binding">
                    Size
                    <span class="sortorder ng-hide" ng-show="predicate[1] === &#39;model.size&#39;" ng-class="{reverse:reverse}"></span>
                </a>
            </th>
            <th class="hidden-sm hidden-xs" ng-hide="config.hideDate">
                <a href="https://files.000webhost.com/" ng-click="order(&#39;model.date&#39;)" class="ng-binding">
                    Date
                    <span class="sortorder ng-hide" ng-show="predicate[1] === &#39;model.date&#39;" ng-class="{reverse:reverse}"></span>
                </a>
            </th>
            <th class="hidden-sm hidden-xs" ng-hide="config.hidePermissions">
                <a href="https://files.000webhost.com/" ng-click="order(&#39;model.permissions&#39;)" class="ng-binding">
                    Permissions
                    <span class="sortorder ng-hide" ng-show="predicate[1] === &#39;model.permissions&#39;" ng-class="{reverse:reverse}"></span>
                </a>
            </th>
        </tr>
    </thead>
    <tbody class="file-item">
        <tr ng-show="fileNavigator.requesting" class="ng-hide">
            <td colspan="5">
                <!-- ngInclude: config.tplPath + '/spinner.html' --><div ng-include="config.tplPath + &#39;/spinner.html&#39;" class="ng-scope"><div class="spinner-wrapper col-xs-12 ng-scope">
    <svg class="spinner-container" style="width:65px;height:65px" viewBox="0 0 44 44">
        <circle class="path" cx="22" cy="22" r="20" fill="none" stroke-width="4"></circle>
    </svg>
</div></div>
            </td>
        </tr>
        <tr ng-show="!fileNavigator.requesting &amp;&amp; fileNavigator.fileList.length &lt; 1 &amp;&amp; !fileNavigator.error" class="ng-hide">
            <td colspan="5" class="ng-binding">
                No files in this folder...
            </td>
        </tr>
        <tr ng-show="!fileNavigator.requesting &amp;&amp; fileNavigator.error" class="ng-hide">
            <td colspan="5" class="ng-binding">
                
            </td>
        </tr>
        <!-- ngRepeat: item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse) --><tr class="item-list ng-scope" ng-repeat="item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse)" ng-show="!fileNavigator.requesting" ng-dblclick="smartClick(item)" ng-right-click="selectOrUnselect(item, $event)" ng-class="{selected: isSelected(item)}">
            <td class="text-center">
                <input class="file-select" type="checkbox" ng-checked="isSelected(item)" ng-click="multipleSelect(item, $event)">
            </td>
            <td ng-click="singleSelect(item, $event)">
                <a href="https://files.000webhost.com/" title="constants.php (0.2  kB)" class="ng-binding">
                    <i class="glyphicon glyphicon-folder-close ng-hide" ng-show="item.model.type === &#39;dir&#39;"></i>
                    <i class="glyphicon glyphicon-file" ng-show="item.model.type === &#39;file&#39;"></i>
                    constants.php
                </a>
            </td>
            <td class="hidden-xs" ng-click="singleSelect(item, $event)">
                <span ng-show="item.model.type !== &#39;dir&#39; || config.showSizeForDirectories" class="ng-binding">
                    0.2  kB
                </span>
            </td>
            <td class="hidden-sm hidden-xs ng-binding" ng-hide="config.hideDate" ng-click="singleSelect(item, $event)">
                2018-03-08 14:00:00
            </td>
            <td class="hidden-sm hidden-xs ng-binding" ng-hide="config.hidePermissions" ng-click="singleSelect(item, $event)">
                -rw-r--r--
            </td>
        </tr><!-- end ngRepeat: item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse) --><tr class="item-list ng-scope" ng-repeat="item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse)" ng-show="!fileNavigator.requesting" ng-dblclick="smartClick(item)" ng-right-click="selectOrUnselect(item, $event)" ng-class="{selected: isSelected(item)}">
            <td class="text-center">
                <input class="file-select" type="checkbox" ng-checked="isSelected(item)" ng-click="multipleSelect(item, $event)">
            </td>
            <td ng-click="singleSelect(item, $event)">
                <a href="https://files.000webhost.com/" title="DBConnection.php (0.3  kB)" class="ng-binding">
                    <i class="glyphicon glyphicon-folder-close ng-hide" ng-show="item.model.type === &#39;dir&#39;"></i>
                    <i class="glyphicon glyphicon-file" ng-show="item.model.type === &#39;file&#39;"></i>
                    DBConnection.php
                </a>
            </td>
            <td class="hidden-xs" ng-click="singleSelect(item, $event)">
                <span ng-show="item.model.type !== &#39;dir&#39; || config.showSizeForDirectories" class="ng-binding">
                    0.3  kB
                </span>
            </td>
            <td class="hidden-sm hidden-xs ng-binding" ng-hide="config.hideDate" ng-click="singleSelect(item, $event)">
                2018-03-08 13:54:00
            </td>
            <td class="hidden-sm hidden-xs ng-binding" ng-hide="config.hidePermissions" ng-click="singleSelect(item, $event)">
                -rw-r--r--
            </td>
        </tr><!-- end ngRepeat: item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse) --><tr class="item-list ng-scope selected" ng-repeat="item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse)" ng-show="!fileNavigator.requesting" ng-dblclick="smartClick(item)" ng-right-click="selectOrUnselect(item, $event)" ng-class="{selected: isSelected(item)}">
            <td class="text-center">
                <input class="file-select" type="checkbox" ng-checked="isSelected(item)" ng-click="multipleSelect(item, $event)" checked="checked">
            </td>
            <td ng-click="singleSelect(item, $event)">
                <a href="https://files.000webhost.com/" title="DbOperations.php (1.8  kB)" class="ng-binding">
                    <i class="glyphicon glyphicon-folder-close ng-hide" ng-show="item.model.type === &#39;dir&#39;"></i>
                    <i class="glyphicon glyphicon-file" ng-show="item.model.type === &#39;file&#39;"></i>
                    DbOperations.php
                </a>
            </td>
            <td class="hidden-xs" ng-click="singleSelect(item, $event)">
                <span ng-show="item.model.type !== &#39;dir&#39; || config.showSizeForDirectories" class="ng-binding">
                    1.8  kB
                </span>
            </td>
            <td class="hidden-sm hidden-xs ng-binding" ng-hide="config.hideDate" ng-click="singleSelect(item, $event)">
                2018-03-08 14:30:00
            </td>
            <td class="hidden-sm hidden-xs ng-binding" ng-hide="config.hidePermissions" ng-click="singleSelect(item, $event)">
                -rw-r--r--
            </td>
        </tr><!-- end ngRepeat: item in $parent.fileList = (fileNavigator.fileList | filter: {model:{name: query}} | orderBy:predicate:reverse) -->
    </tbody>
</table>
</div>
            </div>
        </div>
    </div>

    <!-- ngInclude: config.tplPath + '/modals.html' --><div ng-include="config.tplPath + &#39;/modals.html&#39;" class="ng-scope"><div class="modal animated fadeIn ng-scope" id="imagepreview">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">×</span>
            <span class="sr-only ng-binding">Close</span>
        </button>
        <h4 class="modal-title ng-binding">Item preview</h4>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <img id="imagepreview-target" class="preview" alt="DbOperations.php" ng-class="{&#39;loading&#39;: apiMiddleware.apiHandler.inprocess}">
          <span class="label label-warning ng-binding ng-hide" ng-show="apiMiddleware.apiHandler.inprocess">Loading ...</span>
        </div>
        <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="remove">
  <div class="modal-dialog">
    <div class="modal-content">
    <form ng-submit="remove()" class="ng-pristine ng-valid">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">×</span>
            <span class="sr-only ng-binding">Close</span>
        </button>
        <h4 class="modal-title ng-binding">Confirm</h4>
      </div>
      <div class="modal-body ng-binding">
        Are you sure to delete <!-- ngInclude: --><span ng-include="" data-src="&#39;selected-files-msg&#39;" class="ng-scope">
  <span ng-show="temps.length == 1" class="ng-binding ng-scope">
    DbOperations.php
  </span>
  <span ng-show="temps.length &gt; 1" class="ng-binding ng-scope ng-hide">
    these 1 elements
    <a href="https://files.000webhost.com/" class="label label-primary ng-binding" ng-click="showDetails = !showDetails">
      + Details
    </a>
  </span>
  <div ng-show="temps.length &gt; 1 &amp;&amp; showDetails" class="ng-scope ng-hide">
    <ul class="selected-file-details">
      <!-- ngRepeat: tempItem in temps --><li ng-repeat="tempItem in temps" class="ng-scope">
        <b class="ng-binding">DbOperations.php</b>
      </li><!-- end ngRepeat: tempItem in temps -->
    </ul>
  </div>
</span>

        <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
        <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess" autofocus="autofocus">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="move">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="move()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Move</h4>
            </div>
            <div class="modal-body">
              <!-- ngInclude: --><div ng-include="" data-src="&#39;path-selector&#39;" class="clearfix ng-scope">
  <div class="panel panel-primary mt10 mb0 ng-scope">
    <div class="panel-body">
        <div class="detail-sources">
          <div class="like-code mr5"><b class="ng-binding">Selection:</b>
            <!-- ngInclude: 'selected-files-msg' --><span ng-include="&#39;selected-files-msg&#39;" class="ng-scope">
  <span ng-show="temps.length == 1" class="ng-binding ng-scope">
    DbOperations.php
  </span>
  <span ng-show="temps.length &gt; 1" class="ng-binding ng-scope ng-hide">
    these 1 elements
    <a href="https://files.000webhost.com/" class="label label-primary ng-binding" ng-click="showDetails = !showDetails">
      + Details
    </a>
  </span>
  <div ng-show="temps.length &gt; 1 &amp;&amp; showDetails" class="ng-scope ng-hide">
    <ul class="selected-file-details">
      <!-- ngRepeat: tempItem in temps --><li ng-repeat="tempItem in temps" class="ng-scope">
        <b class="ng-binding">DbOperations.php</b>
      </li><!-- end ngRepeat: tempItem in temps -->
    </ul>
  </div>
</span>
          </div>
        </div>
        <div class="detail-sources">
          <div class="like-code mr5 ng-binding">
            <b class="ng-binding">Destination:</b> /public_html/Android/includes/DbOperations.php
          </div>
          <a href="https://files.000webhost.com/" class="label label-primary ng-binding" ng-click="openNavigator(fileNavigator.currentPath)">
            Change
          </a>
        </div>
    </div>
  </div>
</div>
              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
              <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Move</button>
            </div>
        </form>
    </div>
  </div>
</div>


<div class="modal animated fadeIn ng-scope" id="rename">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="rename()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Rename</h4>
            </div>
            <div class="modal-body">
              <label class="radio ng-binding">Enter new name for <b class="ng-binding">DbOperations.php</b></label>
              <input class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="singleSelection().tempModel.name" autofocus="autofocus">

              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
              <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Rename</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="copy" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="copy()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Copy file</h4>
            </div>
            <div class="modal-body">
              <div ng-show="singleSelection()" class="">
                <label class="radio ng-binding">Enter new name for <b class="ng-binding">DbOperations.php</b></label>
                <input class="form-control ng-pristine ng-valid ng-touched ng-not-empty" ng-model="singleSelection().tempModel.name" autofocus="autofocus">
              </div>

              <!-- ngInclude: --><div ng-include="" data-src="&#39;path-selector&#39;" class="clearfix ng-scope">
  <div class="panel panel-primary mt10 mb0 ng-scope">
    <div class="panel-body">
        <div class="detail-sources">
          <div class="like-code mr5"><b class="ng-binding">Selection:</b>
            <!-- ngInclude: 'selected-files-msg' --><span ng-include="&#39;selected-files-msg&#39;" class="ng-scope">
  <span ng-show="temps.length == 1" class="ng-binding ng-scope">
    DbOperations.php
  </span>
  <span ng-show="temps.length &gt; 1" class="ng-binding ng-scope ng-hide">
    these 1 elements
    <a href="https://files.000webhost.com/" class="label label-primary ng-binding" ng-click="showDetails = !showDetails">
      + Details
    </a>
  </span>
  <div ng-show="temps.length &gt; 1 &amp;&amp; showDetails" class="ng-scope ng-hide">
    <ul class="selected-file-details">
      <!-- ngRepeat: tempItem in temps --><li ng-repeat="tempItem in temps" class="ng-scope">
        <b class="ng-binding">DbOperations.php</b>
      </li><!-- end ngRepeat: tempItem in temps -->
    </ul>
  </div>
</span>
          </div>
        </div>
        <div class="detail-sources">
          <div class="like-code mr5 ng-binding">
            <b class="ng-binding">Destination:</b> /public_html/Android/includes/DbOperations.php
          </div>
          <a href="https://files.000webhost.com/" class="label label-primary ng-binding" ng-click="openNavigator(fileNavigator.currentPath)">
            Change
          </a>
        </div>
    </div>
  </div>
</div>
              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
              <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Copy</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="compress" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="compress()" class="ng-valid ng-dirty ng-submitted">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Compress</h4>
            </div>
            <div class="modal-body">
              <div ng-show="apiMiddleware.apiHandler.asyncSuccess" class="ng-hide">
                  <div class="label label-success error-msg ng-binding">Compression started in a background process</div>
              </div>
              <div ng-hide="apiMiddleware.apiHandler.asyncSuccess">
                  <div ng-hide="config.allowedActions.compressChooseName" class="ng-binding ng-hide">
                    Are you sure to compress <b class="ng-binding">DbOperations.php</b> ?
                  </div>
                  <div ng-show="config.allowedActions.compressChooseName">
                    <label class="radio ng-binding">
                      Enter the file name for the compression of
                      <!-- ngInclude: --><span ng-include="" data-src="&#39;selected-files-msg&#39;" class="ng-scope">
  <span ng-show="temps.length == 1" class="ng-binding ng-scope">
    DbOperations.php
  </span>
  <span ng-show="temps.length &gt; 1" class="ng-binding ng-scope ng-hide">
    these 1 elements
    <a href="https://files.000webhost.com/" class="label label-primary ng-binding" ng-click="showDetails = !showDetails">
      + Details
    </a>
  </span>
  <div ng-show="temps.length &gt; 1 &amp;&amp; showDetails" class="ng-scope ng-hide">
    <ul class="selected-file-details">
      <!-- ngRepeat: tempItem in temps --><li ng-repeat="tempItem in temps" class="ng-scope">
        <b class="ng-binding">DbOperations.php</b>
      </li><!-- end ngRepeat: tempItem in temps -->
    </ul>
  </div>
</span>
                    </label>
                      <input class="form-control ng-valid ng-dirty ng-touched ng-not-empty" ng-model="temp.tempModel.name" autofocus="autofocus" style="width: 78%; display:inline-block">
                      <select name="repeatSelect" id="repeatSelect" ng-model="temp.tempModel.compressExtension" style="width: 20%; display:inline-block" class="ng-valid ng-dirty ng-touched ng-empty"><option value="? undefined:undefined ?"></option>
                          <!-- ngRepeat: option in config.compresableFilePattern --><option ng-repeat="option in config.compresableFilePattern" value="zip" class="ng-binding ng-scope">
                              .zip
                          </option><!-- end ngRepeat: option in config.compresableFilePattern --><option ng-repeat="option in config.compresableFilePattern" value="tar" class="ng-binding ng-scope">
                              .tar
                          </option><!-- end ngRepeat: option in config.compresableFilePattern --><option ng-repeat="option in config.compresableFilePattern" value="tar.gz" class="ng-binding ng-scope">
                              .tar.gz
                          </option><!-- end ngRepeat: option in config.compresableFilePattern -->
                      </select>
                  </div>
              </div>

              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <div ng-show="apiMiddleware.apiHandler.asyncSuccess" class="ng-hide">
                  <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Close</button>
              </div>
              <div ng-hide="apiMiddleware.apiHandler.asyncSuccess">
                  <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
                  <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Compress</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="extract" ng-init="singleSelection().emptyName()">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="extract()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Extract item</h4>
            </div>
            <div class="modal-body">
              <div ng-show="apiMiddleware.apiHandler.asyncSuccess" class="ng-hide">
                  <div class="label label-success error-msg ng-binding">Extraction completed</div>
              </div>
              <div ng-hide="apiMiddleware.apiHandler.asyncSuccess">
                  <label class="radio ng-binding">Enter the folder name for the extraction of <b class="ng-binding">DbOperations.php</b></label>
                  <input class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="singleSelection().tempModel.extractionName" autofocus="autofocus">
              </div>
              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>

            <div class="modal-footer">
                <div class="progress progress-striped active ng-hide" ng-show="apiMiddleware.apiHandler.inprocess">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
              <div ng-show="apiMiddleware.apiHandler.asyncSuccess" class="ng-hide">
                  <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Close</button>
              </div>
              <div ng-hide="apiMiddleware.apiHandler.asyncSuccess">
                  <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
                  <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Extract</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope in" id="edit" ng-class="{&#39;modal-fullscreen&#39;: fullscreen}" style="display: block; padding-left: 9px;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form ng-submit="edit()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <button type="button" class="close fullscreen" ng-click="fullscreen=!fullscreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                  <span class="sr-only ng-binding">Toggle fullscreen</span>
              </button>
              <h4 class="modal-title ng-binding">Edit file</h4>
            </div>
            <div class="modal-body">
                <label class="radio bold ng-binding">/public_html/Android/includes/DbOperations.php</label>
                <span class="label label-warning ng-binding ng-hide" ng-show="apiMiddleware.apiHandler.inprocess">Loading ...</span>
                <div id="code-editor" ui-ace="{
                    require: [&#39;ace/ext/language_tools&#39;,&#39;ace/ext/modelist&#39;],
                      useWrapMode : true,
                      showGutter: true,
                      theme: codeEditor.theme,
                      mode: codeEditor.mode}" ng-model="singleSelection().tempModel.content" ng-show="!apiMiddleware.apiHandler.inprocess" class="ng-pristine ng-untouched ng-valid ace_editor ace-chrome ng-not-empty"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; left: -100px;"></textarea><div class="ace_gutter" aria-hidden="true"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 378.781px; width: 47px;"><div class="ace_gutter-cell " style="height: 14.3906px;">1</div><div class="ace_gutter-cell " style="height: 14.3906px;">2</div><div class="ace_gutter-cell " style="height: 14.3906px;">3<span class="ace_fold-widget ace_start ace_open" style="height: 14.3906px;"></span></div><div class="ace_gutter-cell " style="height: 14.3906px;">4</div><div class="ace_gutter-cell " style="height: 14.3906px;">5</div><div class="ace_gutter-cell " style="height: 14.3906px;">6</div><div class="ace_gutter-cell " style="height: 14.3906px;">7<span class="ace_fold-widget ace_start ace_open" style="height: 14.3906px;"></span></div><div class="ace_gutter-cell " style="height: 14.3906px;">8</div><div class="ace_gutter-cell " style="height: 14.3906px;">9</div><div class="ace_gutter-cell " style="height: 14.3906px;">10</div><div class="ace_gutter-cell " style="height: 14.3906px;">11</div><div class="ace_gutter-cell " style="height: 14.3906px;">12</div><div class="ace_gutter-cell " style="height: 14.3906px;">13</div><div class="ace_gutter-cell " style="height: 14.3906px;">14</div><div class="ace_gutter-cell " style="height: 14.3906px;">15</div><div class="ace_gutter-cell " style="height: 14.3906px;">16</div><div class="ace_gutter-cell " style="height: 14.3906px;">17</div><div class="ace_gutter-cell " style="height: 14.3906px;">18</div><div class="ace_gutter-cell " style="height: 14.3906px;">19<span class="ace_fold-widget ace_start ace_open" style="height: 14.3906px;"></span></div><div class="ace_gutter-cell " style="height: 14.3906px;">20<span class="ace_fold-widget ace_start ace_open" style="height: 14.3906px;"></span></div><div class="ace_gutter-cell " style="height: 14.3906px;">21</div><div class="ace_gutter-cell " style="height: 14.3906px;">22<span class="ace_fold-widget ace_start ace_open" style="height: 14.3906px;"></span></div><div class="ace_gutter-cell " style="height: 14.3906px;">23</div><div class="ace_gutter-cell " style="height: 28.7813px;">24</div><div class="ace_gutter-cell " style="height: 14.3906px;">25</div></div><div class="ace_gutter-active-line" style="top: 0px; height: 14.3906px;"></div></div><div class="ace_scroller" style="left: 47px; right: 10px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 811px; height: 378.781px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 540px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:14.390625px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_support ace_php_tag">&lt;?php</span> </div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px">    <span class="ace_keyword">class</span> <span class="ace_identifier">DbOperations</span><span class="ace_paren ace_lparen">{</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span>    <span class="ace_keyword">private</span> <span class="ace_variable">$con</span>; </div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span>    <span class="ace_keyword">function</span> <span class="ace_identifier">__construct</span><span class="ace_paren ace_lparen">(</span><span class="ace_paren ace_rparen">)</span><span class="ace_paren ace_lparen">{</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_support ace_function">require_once</span> <span class="ace_support ace_function">dirname</span><span class="ace_paren ace_lparen">(</span><span class="ace_constant ace_language">__FILE__</span><span class="ace_paren ace_rparen">)</span> .<span class="ace_string">"/DBConnection.php"</span>;</div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_variable">$db</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_keyword">new</span> <span class="ace_support ace_class">DbConnect</span><span class="ace_paren ace_lparen">(</span><span class="ace_paren ace_rparen">)</span>;</div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_variable">$this</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">con</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_variable">$db</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">connect</span><span class="ace_paren ace_lparen">(</span><span class="ace_paren ace_rparen">)</span>;</div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span>    <span class="ace_paren ace_rparen">}</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span>    <span class="ace_comment">/*CRUD -&gt; C -&gt; CREATE */</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span>    <span class="ace_keyword">public</span> <span class="ace_keyword">function</span> <span class="ace_identifier">createUser</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$userName</span>, <span class="ace_variable">$email</span>, <span class="ace_variable">$password</span>,<span class="ace_variable">$phonenumber</span><span class="ace_paren ace_rparen">)</span><span class="ace_paren ace_lparen">{</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_keyword">if</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$this</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">isUserExist</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$userName</span>,<span class="ace_variable">$email</span><span class="ace_paren ace_rparen">))</span><span class="ace_paren ace_lparen">{</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_support ace_function">return</span> <span class="ace_constant ace_numeric">0</span>; </div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_paren ace_rparen">}</span><span class="ace_keyword">else</span><span class="ace_paren ace_lparen">{</span></div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_variable">$password</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_support ace_function">md5</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$password</span><span class="ace_paren ace_rparen">)</span>;</div></div><div class="ace_line_group" style="height:28.78125px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_variable">$stmt</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_variable">$this</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">con</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">prepare</span><span class="ace_paren ace_lparen">(</span><span class="ace_string">"INSERT INTO `Users` (`ID`, `userName`, `email`, `password`,`phonenumber`) </span></div><div class="ace_line" style="height:14.390625px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_string">VALUES (NULL, ?, ?, ?, ?);"</span><span class="ace_paren ace_rparen">)</span>;</div></div><div class="ace_line_group" style="height:14.390625px"><div class="ace_line" style="height:14.390625px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_variable">$stmt</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">bind_param</span><span class="ace_paren ace_lparen">(</span><span class="ace_string">"ssss"</span>,<span class="ace_variable">$userName</span>,<span class="ace_variable">$email</span>,<span class="ace_variable">$password</span>,<span class="ace_variable">$phonenumber</span><span class="ace_paren ace_rparen">)</span>;</div></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.69763px; height: 14.3906px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="width: 15px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 15px; height: 1007.34px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 15px; left: 47px; right: 10px;"><div class="ace_scrollbar-inner" style="height: 15px; width: 828px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div>
                <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default ng-binding" ng-show="config.allowedActions.edit" ng-disabled="apiMiddleware.apiHandler.inprocess">save &amp; close</button>
              <button type="button" class="btn btn-danger ng-binding" ng-show="config.allowedActions.edit" ng-click="save()" ng-disabled="apiMiddleware.apiHandler.inprocess">save</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="newfolder">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="createFolder()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">New folder</h4>
            </div>
            <div class="modal-body">
              <label class="radio ng-binding">Folder name</label>
              <input class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="singleSelection().tempModel.name" autofocus="autofocus">
              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
              <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Create</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="newfile">
    <div class="modal-dialog">
        <div class="modal-content">
            <form ng-submit="createFile()" class="ng-pristine ng-valid">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only ng-binding">Close</span>
                    </button>
                    <h4 class="modal-title ng-binding">New File</h4>
                </div>
                <div class="modal-body">
                    <label class="radio ng-binding">Name</label>
                    <input class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="temp.new_file_name" autofocus="autofocus">
                    <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Cancel</button>
                    <button type="submit" class="btn btn-danger ng-binding" ng-disabled="apiMiddleware.apiHandler.inprocess">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal animated fadeIn ng-scope" id="uploadfiledialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="uploadFiles()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Upload files</h4>
            </div>
            <div class="modal-body">
              <label class="radio ng-binding">
                Files will be uploaded to
                <b class="ng-binding">/public_html/Android/includes</b>
              </label>
              <button class="btn btn-default btn-block ng-binding" type="button" ngf-select="$parent.addForUpload($files)" ngf-multiple="true">
                Select files
              </button>
              
              <div class="upload-list">
                <div class="alert alert-warning ng-hide" ng-show="!!directoryWarning" ng-click="directoryWarning = false">Folder upload is not supported at the moment. Please compress your files, upload it as archive and extract.</div>
                  <div class="alert alert-danger ng-hide" ng-show="fileUploadErrorMessage">
                      <pre class="alert-pre ng-binding"><pre>                  </pre></pre></div>
                <ul class="list-group">
                    <!-- ngRepeat: (index, uploadFolder) in $parent.uploadFolderList -->
                  <!-- ngRepeat: (index, uploadFile) in $parent.uploadFileList -->
                </ul>
                <div ng-show="apiMiddleware.apiHandler.inprocess" class="ng-hide">
                  <em class="ng-binding">Uploading... 0%</em>
                  <div class="progress active mb0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                  </div>
                </div>
              </div>
              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <div>
                  <button type="button" class="btn btn-default ng-binding" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger ng-binding" ng-disabled="!$parent.uploadFileList.length || apiMiddleware.apiHandler.inprocess" disabled="disabled">Upload</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="changepermissions">
  <div class="modal-dialog">
    <div class="modal-content">
        <form ng-submit="changePermissions()" class="ng-pristine ng-valid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only ng-binding">Close</span>
              </button>
              <h4 class="modal-title ng-binding">Change permissions</h4>
            </div>
            <div class="modal-body">
              <table class="table mb0">
                  <thead>
                      <tr>
                          <th class="ng-binding">Permissions</th>
                          <th class="col-xs-1 text-center ng-binding">Read</th>
                          <th class="col-xs-1 text-center ng-binding">Write</th>
                          <th class="col-xs-1 text-center ng-binding">Exec</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- ngRepeat: (permTypeKey, permTypeValue) in temp.tempModel.perms --><tr ng-repeat="(permTypeKey, permTypeValue) in temp.tempModel.perms" class="ng-scope">
                          <td class="ng-binding">Owner</td>
                          <!-- ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue -->
                      </tr><!-- end ngRepeat: (permTypeKey, permTypeValue) in temp.tempModel.perms --><tr ng-repeat="(permTypeKey, permTypeValue) in temp.tempModel.perms" class="ng-scope">
                          <td class="ng-binding">Group</td>
                          <!-- ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue -->
                      </tr><!-- end ngRepeat: (permTypeKey, permTypeValue) in temp.tempModel.perms --><tr ng-repeat="(permTypeKey, permTypeValue) in temp.tempModel.perms" class="ng-scope">
                          <td class="ng-binding">Others</td>
                          <!-- ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue --><td ng-repeat="(permKey, permValue) in permTypeValue" class="col-xs-1 text-center ng-scope" ng-click="main()">
                              <label class="col-xs-12">
                                <input type="checkbox" ng-model="temp.tempModel.perms[permTypeKey][permKey]" class="ng-pristine ng-untouched ng-valid ng-empty">
                              </label>
                          </td><!-- end ngRepeat: (permKey, permValue) in permTypeValue -->
                      </tr><!-- end ngRepeat: (permTypeKey, permTypeValue) in temp.tempModel.perms -->
                </tbody>
              </table>
              <div class="checkbox ng-hide" ng-show="config.enablePermissionsRecursive &amp;&amp; selectionHas(&#39;dir&#39;)">
                <label class="ng-binding">
                  <input type="checkbox" ng-model="temp.tempModel.recursive" class="ng-pristine ng-untouched ng-valid ng-empty"> Recursive
                </label>
              </div>
              <div class="clearfix mt10">
                  <span class="label label-primary pull-left ng-binding" ng-hide="temp.multiple">
                    Original: 
                    -rw-r--r-- 
                    (644)
                  </span>
                  <span class="label label-primary pull-right ng-binding">
                    Changes: 
                    -rw-r--r-- 
                    (644)
                  </span>
              </div>
              <!-- ngInclude: --><div ng-include="" data-src="&#39;error-bar&#39;" class="clearfix ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn ng-scope ng-hide" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span class="ng-binding"></span>
  </div>
</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default ng-binding" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger ng-binding" ng-disabled="">Change</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="modal animated fadeIn ng-scope" id="selector" ng-controller="ModalFileManagerCtrl" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">×</span>
            <span class="sr-only ng-binding">Close</span>
        </button>
        <h4 class="modal-title ng-binding">Select the destination folder</h4>
      </div>
      <div class="modal-body">
        <div>
            <!-- ngInclude: config.tplPath + '/current-folder-breadcrumb.html' --><div ng-include="config.tplPath + &#39;/current-folder-breadcrumb.html&#39;" class="ng-scope"><ol class="breadcrumb ng-scope">
    <li>
        <a href="https://files.000webhost.com/" ng-click="fileNavigator.goTo(-1)" class="ng-binding">
            asnasucse18
        </a>
    </li>
    <!-- ngRepeat: (key, dir) in fileNavigator.currentPath track by key -->
</ol></div>
            <!-- ngInclude: config.tplPath + '/main-table-modal.html' --><div ng-include="config.tplPath + &#39;/main-table-modal.html&#39;" class="ng-scope"><table class="table table-condensed table-modal-condensed mb0 ng-scope">
    <thead>
        <tr>
            <th>
                <a href="https://files.000webhost.com/" ng-click="order(&#39;model.name&#39;)" class="ng-binding">
                    Name
                    <span class="sortorder" ng-show="predicate[1] === &#39;model.name&#39;" ng-class="{reverse:reverse}"></span>
                </a>
            </th>
            <th class="text-right"></th>
        </tr>
    </thead>
    <tbody class="file-item">
        <tr ng-show="fileNavigator.requesting" class="ng-hide">
            <td colspan="2">
                <!-- ngInclude: config.tplPath + '/spinner.html' --><div ng-include="config.tplPath + &#39;/spinner.html&#39;" class="ng-scope"><div class="spinner-wrapper col-xs-12 ng-scope">
    <svg class="spinner-container" style="width:65px;height:65px" viewBox="0 0 44 44">
        <circle class="path" cx="22" cy="22" r="20" fill="none" stroke-width="4"></circle>
    </svg>
</div></div>
            </td>
        </tr>
        <tr ng-show="!fileNavigator.requesting &amp;&amp; !fileNavigator.listHasFolders() &amp;&amp; !fileNavigator.error" class="ng-hide">
            <td class="ng-binding">
                This folder not contains children folders...
            </td>
            <td class="text-right">
                <button class="btn btn-sm btn-default ng-binding" ng-click="fileNavigator.upDir()">Go back</button>
            </td>
        </tr>
        <tr ng-show="!fileNavigator.requesting &amp;&amp; fileNavigator.error" class="ng-hide">
            <td colspan="2" class="ng-binding">
                
            </td>
        </tr>
        <!-- ngRepeat: item in fileNavigator.fileList | orderBy:predicate:reverse --><!-- ngIf: !selectedFilesAreChildOfPath(item) --><tr ng-repeat="item in fileNavigator.fileList | orderBy:predicate:reverse" ng-show="!fileNavigator.requesting &amp;&amp; item.model.type === &#39;dir&#39;" ng-if="!selectedFilesAreChildOfPath(item)" class="ng-scope">
            <td>
                <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item)" title="public_html (4.0  kB)" class="ng-binding">
                    <i class="glyphicon glyphicon-folder-close"></i>
                    public_html
                </a>
            </td>
            <td class="text-right">
                <button class="btn btn-sm btn-default ng-binding" ng-click="select(item)">
                    <i class="glyphicon glyphicon-hand-up"></i> Select this
                </button>
            </td>
        </tr><!-- end ngIf: !selectedFilesAreChildOfPath(item) --><!-- end ngRepeat: item in fileNavigator.fileList | orderBy:predicate:reverse --><!-- ngIf: !selectedFilesAreChildOfPath(item) --><tr ng-repeat="item in fileNavigator.fileList | orderBy:predicate:reverse" ng-show="!fileNavigator.requesting &amp;&amp; item.model.type === &#39;dir&#39;" ng-if="!selectedFilesAreChildOfPath(item)" class="ng-scope">
            <td>
                <a href="https://files.000webhost.com/" ng-click="fileNavigator.folderClick(item)" title="tmp (0.1  kB)" class="ng-binding">
                    <i class="glyphicon glyphicon-folder-close"></i>
                    tmp
                </a>
            </td>
            <td class="text-right">
                <button class="btn btn-sm btn-default ng-binding" ng-click="select(item)">
                    <i class="glyphicon glyphicon-hand-up"></i> Select this
                </button>
            </td>
        </tr><!-- end ngIf: !selectedFilesAreChildOfPath(item) --><!-- end ngRepeat: item in fileNavigator.fileList | orderBy:predicate:reverse -->
    </tbody>
</table></div>
            <hr>
            <button class="btn btn-sm btn-default ng-binding" ng-click="selectCurrent()">
                <i class="glyphicon"></i> Select this
            </button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-disabled="apiMiddleware.apiHandler.inprocess">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/ng-template" id="path-selector" class="ng-scope">
  <div class="panel panel-primary mt10 mb0">
    <div class="panel-body">
        <div class="detail-sources">
          <div class="like-code mr5"><b>{{"selection" | translate}}:</b>
            <span ng-include="'selected-files-msg'"></span>
          </div>
        </div>
        <div class="detail-sources">
          <div class="like-code mr5">
            <b>{{"destination" | translate}}:</b> {{ getSelectedPath() }}
          </div>
          <a href="" class="label label-primary" ng-click="openNavigator(fileNavigator.currentPath)">
            {{'change' | translate}}
          </a>
        </div>
    </div>
  </div>
</script>

<script type="text/ng-template" id="error-bar" class="ng-scope">
  <div class="label label-danger error-msg pull-left animated fadeIn" ng-show="apiMiddleware.apiHandler.error">
    <i class="glyphicon glyphicon-remove-circle"></i>
    <span>{{apiMiddleware.apiHandler.error}}</span>
  </div>
</script>

<script type="text/ng-template" id="selected-files-msg" class="ng-scope">
  <span ng-show="temps.length == 1">
    {{singleSelection().model.name}}
  </span>
  <span ng-show="temps.length > 1">
    {{'these_elements' | translate:totalSelecteds()}}
    <a href="" class="label label-primary" ng-click="showDetails = !showDetails">
      {{showDetails ? '-' : '+'}} {{'details' | translate}}
    </a>
  </span>
  <div ng-show="temps.length > 1 &amp;&amp; showDetails">
    <ul class="selected-file-details">
      <li ng-repeat="tempItem in temps">
        <b>{{tempItem.model.name}}</b>
      </li>
    </ul>
  </div>
</script>
</div>
    <!-- ngInclude: config.tplPath + '/item-context-menu.html' --><div ng-include="config.tplPath + &#39;/item-context-menu.html&#39;" class="ng-scope"><div id="context-menu" class="dropdown clearfix animated fast fadeIn ng-scope" style="left: 380px; top: -200px; display: none;">
    <!-- ngInclude: config.tplPath + '/action-meniu.html' --><ul class="dropdown-menu dropdown-right-click ng-scope" role="menu" aria-labelledby="dropdownMenu" ng-show="temps.length" ng-include="config.tplPath + &#39;/action-meniu.html&#39;"><li ng-show="singleSelection() &amp;&amp; singleSelection().isFolder()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="smartClick(singleSelection())">
        <i class="glyphicon glyphicon-folder-open"></i> <div class="ng-binding"> Open </div>
    </a>
</li>

<li ng-show="config.pickCallback &amp;&amp; singleSelection() &amp;&amp; singleSelection().isSelectable()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="config.pickCallback(singleSelection().model)">
        <i class="glyphicon glyphicon-hand-up"></i> <div class="ng-binding"> Select this </div>
    </a>
</li>

<li ng-show="config.allowedActions.download &amp;&amp; !selectionHas(&#39;dir&#39;) &amp;&amp; singleSelection()" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="download()">
        <i class="glyphicon glyphicon-cloud-download"></i> <div class="ng-binding"> Download </div>
    </a>
</li>

<li ng-show="config.allowedActions.downloadMultiple &amp;&amp; !selectionHas(&#39;dir&#39;) &amp;&amp; !singleSelection()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="download()">
        <i class="glyphicon glyphicon-cloud-download"></i> <div class="ng-binding"> Download as ZIP </div>
    </a>
</li>

<li ng-show="config.allowedActions.preview &amp;&amp; singleSelection().isImage() &amp;&amp; singleSelection()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="openImagePreview()">
        <i class="glyphicon glyphicon-picture"></i> <div class="ng-binding"> Preview </div>
    </a>
</li>

<li ng-show="singleSelection() &amp;&amp; canOpenInNewTab() &amp;&amp; &#39;000webhost&#39; == config.theme" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="openInNewTab()">
        <i class="glyphicon glyphicon-file"></i> <div class="ng-binding"> View </div>
    </a>
</li>

<li ng-show="config.allowedActions.rename &amp;&amp; singleSelection()" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;rename&#39;)">
        <i class="glyphicon glyphicon-edit"></i> <div class="ng-binding"> Rename </div>
    </a>
</li>

<li ng-show="config.allowedActions.move" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modalWithPathSelector(&#39;move&#39;)">
        <i class="glyphicon glyphicon-arrow-right"></i> <div class="ng-binding"> Move </div>
    </a>
</li>

<li ng-show="config.allowedActions.copy" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modalWithPathSelector(&#39;copy&#39;)">
        <i class="glyphicon glyphicon-log-out"></i> <div class="ng-binding"> Copy </div>
    </a>
</li>

<li ng-show="config.allowedActions.edit &amp;&amp; singleSelection() &amp;&amp; singleSelection().isEditable()" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="openEditItem()">
        <i class="glyphicon glyphicon-pencil"></i> <div class="ng-binding"> Edit </div>
    </a>
</li>

<li ng-show="config.allowedActions.changePermissions" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;changepermissions&#39;)">
        <i class="glyphicon glyphicon-lock"></i> <div class="ng-binding"> Permissions </div>
    </a>
</li>

<li ng-show="config.allowedActions.compress" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;compress&#39;)">
        <i class="glyphicon glyphicon-compressed"></i> <div class="ng-binding"> Compress </div>
    </a>
</li>

<li ng-show="config.allowedActions.extract &amp;&amp; singleSelection() &amp;&amp; singleSelection().isExtractable()" class="ng-scope ng-hide">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;extract&#39;)">
        <i class="glyphicon glyphicon-export"></i> <div class="ng-binding"> Extract </div>
    </a>
</li>

<li class="divider ng-scope" ng-show="config.allowedActions.remove"></li>

<li ng-show="config.allowedActions.remove" class="ng-scope">
    <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;remove&#39;)">
        <i class="glyphicon glyphicon-trash"></i> <div class="ng-binding"> Delete </div>
    </a>
</li></ul>

    <ul class="dropdown-menu dropdown-right-click ng-hide" role="menu" aria-labelledby="dropdownMenu" ng-show="!temps.length">
        <li role="presentation" ng-show="config.allowedActions.createFile" ng-click="modal(&#39;newfile&#39;) &amp;&amp; prepareNewFile()">
            <a href="https://files.000webhost.com/" role="menuitem" tabindex="-1" class="ng-binding">
                <i class="glyphicon glyphicon-file"></i> New File
            </a>
        </li>
        <li ng-show="config.allowedActions.createFolder">
            <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;newfolder&#39;) &amp;&amp; prepareNewFolder()" class="ng-binding">
                <i class="glyphicon glyphicon-plus"></i> New folder
            </a>
        </li>
        <li ng-show="config.allowedActions.upload">
            <a href="https://files.000webhost.com/" tabindex="-1" ng-click="modal(&#39;uploadfiledialog&#39;)" class="ng-binding">
                <i class="glyphicon glyphicon-cloud-upload"></i> Upload files
            </a>
        </li>
    </ul>
</div></div>
</div>
</angular-filemanager><!-- end ngIf: user.status && user.loading == 0 -->

    <div class="row login-page ng-hide" ng-hide="user.status">
      <div class="col-md-4 col-md-offset-4">
        <h3><img src="./DbOperations_files/logo-colored.svg" class="logo" alt="logo" ng-show="&#39;000webhost&#39; == user.config.theme">File Manager</h3>

        <div class="alert alert-warning ng-hide" ng-show="user.login.error">Log in details are not correct.</div>
        <!-- ngInclude: user.config.tplPath + '/spinner.html' --><div ng-show="user.loading &gt; 0" ng-include="user.config.tplPath + &#39;/spinner.html&#39;" class="ng-scope ng-hide"><div class="spinner-wrapper col-xs-12 ng-scope">
    <svg class="spinner-container" style="width:65px;height:65px" viewBox="0 0 44 44">
        <circle class="path" cx="22" cy="22" r="20" fill="none" stroke-width="4"></circle>
    </svg>
</div></div>
        <form ng-submit="user.login.attempt()" ng-show="user.loading==0" class="ng-dirty ng-valid-parse ng-valid ng-valid-required">
          <div class="form-group">
            <label for="input-username">Website Name:</label>
            <input id="input-username" type="text" ng-model="user.login.input.username" required="" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched">
          </div>
          <div class="form-group">
            <label for="input-password">Password:</label>
            <input id="input-password" type="password" ng-model="user.login.input.password" required="" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched">
          </div>
          <p class="text-center">
            <button type="submit" class="btn btn-primary btn-lg btn-login">Log In</button>
          </p>
        </form>
      </div>
    </div>
  </div>

  <script>
      $(document).on('click', '#header-menu-button', function () {
          $('#left-sidebar-container').toggleClass('toggle-left-sidebar');
      });

      $(window).on('resize', function () {
          if ($(this).width() >= 768) {
              $('#left-sidebar-container').removeClass('toggle-left-sidebar');
          }
      });
  </script>



<label tabindex="-1" style="visibility: hidden; position: absolute; overflow: hidden; width: 0px; height: 0px; border: none; margin: 0px; padding: 0px;">upload<input type="file" ngf-select="$parent.addForUpload($files)" ngf-multiple="true" multiple="multiple"></label><div class="modal-backdrop in"></div></body></html>