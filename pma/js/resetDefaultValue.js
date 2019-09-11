/**
* jQuery resetDefaultValue plugin
* @version 0.9.1
* @author Leandro Vieira Pinho <leandro.w3invent@gmail.com>
* How to use
* $(function() {
*     $('input').resetDefaultValue(); // for all input elements
*  $('input.className').resetDefaultValue(); // for some elements
*     $('#q').resetDefaultValue(); // for a especific element
*  $('input[@type=text]').resetDefaultValue(); // avoid button/reset/submit buttons
*  $('textarea').resetDefaultValue(); // work with textarea too
* });
*/
jQuery.fn.resetDefaultValue = function() {
    function _clearDefaultValue() {
        var _$ = $(this);
        if ( _$.val() == this.defaultValue ) { _$.val(''); }
    };
    function _resetDefaultValue() {
        var _$ = $(this);
        if ( _$.val() == '' ) { _$.val(this.defaultValue); }
    };
    return this.click(_clearDefaultValue).focus(_clearDefaultValue).blur(_resetDefaultValue);
}