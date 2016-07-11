jQuery.fn.searchFilter=function(e,F){return new function(c,e,u){this.$=c;this.add=function(a){null==a?c.find(".ui-add-last").click():c.find(".sf:eq("+a+") .ui-add").click();return this};this.del=function(a){null==a?c.find(".sf:last .ui-del").click():c.find(".sf:eq("+a+") .ui-del").click();return this};this.search=function(a){c.find(".ui-search").click();return this};this.reset=function(a){void 0===a&&(a=!1);c.find(".ui-reset").trigger("click",[a]);return this};this.close=function(){c.find(".ui-closer").click();
return this};if(null!=e){var z=function(a,b){var d=c.find("tr.sf td.data "+a);null!=d[0]&&jQuery.each(b,function(){null!=this.data?d.bind(this.type,this.data,this.fn):d.bind(this.type,this.fn)})},A=function(a,b){var d=c.find("tr.sf td.data "+a);null!=d[0]&&b(d)},v=function(a,b,d){return"<select class='"+a+"'"+(d?" style='display:none;'":"")+">"+b+"</select>"},h=function(a,b){return"<option value='"+a+"'>"+b+"</option>"},B=function(a){jQuery(this).toggleClass("ui-state-active","mousedown"==a.type);
return!1},C=function(){jQuery(this).toggleClass("ui-state-hover");return!1},f=jQuery.extend({},jQuery.fn.searchFilter.defaults,u),k=-1,g="";jQuery.each(f.groupOps,function(){g+=h(this.op,this.text)});g="<select name='groupOp'>"+g+"</select>";c.html("").addClass("ui-searchFilter").append("<div class='ui-widget-overlay' style='z-index: -1'>&#160;</div><table class='ui-widget-content ui-corner-all'><thead><tr><td colspan='5' class='ui-widget-header ui-corner-all' style='line-height: 18px;'><div class='ui-closer ui-state-default ui-corner-all ui-helper-clearfix' style='float: right;'><span class='ui-icon ui-icon-close'></span></div>"+
f.windowTitle+"</td></tr></thead><tbody><tr class='sf'><td class='fields'></td><td class='ops'></td><td class='data'></td><td><div class='ui-del ui-state-default ui-corner-all'><span class='ui-icon ui-icon-minus'></span></div></td><td><div class='ui-add ui-state-default ui-corner-all'><span class='ui-icon ui-icon-plus'></span></div></td></tr><tr><td colspan='5' class='divider'><hr class='ui-widget-content' style='margin:1px'/></td></tr></tbody><tfoot><tr><td colspan='3'><span class='ui-reset ui-state-default ui-corner-all' style='display: inline-block; float: left;'><span class='ui-icon ui-icon-arrowreturnthick-1-w' style='float: left;'></span><span style='line-height: 18px; padding: 0 7px 0 3px;'>"+
f.resetText+"</span></span><span class='ui-search ui-state-default ui-corner-all' style='display: inline-block; float: right;'><span class='ui-icon ui-icon-search' style='float: left;'></span><span style='line-height: 18px; padding: 0 7px 0 3px;'>"+f.searchText+"</span></span><span class='matchText'>"+f.matchText+"</span> "+g+" <span class='rulesText'>"+f.rulesText+"</span></td><td>&#160;</td><td><div class='ui-add-last ui-state-default ui-corner-all'><span class='ui-icon ui-icon-plusthick'></span></div></td></tr></tfoot></table>");
var w=c.find("tr.sf"),D=w.find("td.fields"),x=w.find("td.ops"),l=w.find("td.data"),m="";jQuery.each(f.operators,function(){m+=h(this.op,this.text)});m=v("default",m,!0);x.append(m);l.append("<input type='text' class='default' style='display:none;' />");var r="",y=!1,t=!1;jQuery.each(e,function(a){r+=h(this.itemval,this.text);if(null!=this.ops){y=!0;var b="";jQuery.each(this.ops,function(){b+=h(this.op,this.text)});b=v("field"+a,b,!0);x.append(b)}if(null!=this.dataUrl){a>k&&(k=a);t=!0;var d=this.dataEvents,
p=this.dataInit,E=this.buildSelect;jQuery.ajax(jQuery.extend({url:this.dataUrl,complete:function(b){b=null!=E?jQuery("<div />").append(E(b)):jQuery("<div />").append(b.responseText);b.find("select").addClass("field"+a).hide();l.append(b.html());p&&A(".field"+a,p);d&&z(".field"+a,d);a==k&&c.find("tr.sf td.fields select[name='field']").change()}},f.ajaxSelectOptions))}else if(null!=this.dataValues){t=!0;var q="";jQuery.each(this.dataValues,function(){q+=h(this.value,this.text)});q=v("field"+a,q,!0);
l.append(q)}else if(null!=this.dataEvents||null!=this.dataInit)t=!0,q="<input type='text' class='field"+a+"' />",l.append(q);null!=this.dataInit&&a!=k&&A(".field"+a,this.dataInit);null!=this.dataEvents&&a!=k&&z(".field"+a,this.dataEvents)});r="<select name='field'>"+r+"</select>";D.append(r);e=D.find("select[name='field']");y?e.change(function(a){var b=a.target.selectedIndex;a=jQuery(a.target).parents("tr.sf").find("td.ops");a.find("select").removeAttr("name").hide();b=a.find(".field"+b);null==b[0]&&
(b=a.find(".default"));b.attr("name","op").show();return!1}):x.find(".default").attr("name","op").show();t?e.change(function(a){var b=a.target.selectedIndex;a=jQuery(a.target).parents("tr.sf").find("td.data");a.find("select,input").removeClass("vdata").hide();b=a.find(".field"+b);null==b[0]&&(b=a.find(".default"));b.show().addClass("vdata");return!1}):l.find(".default").show().addClass("vdata");(y||t)&&e.change();c.find(".ui-state-default").hover(C,C).mousedown(B).mouseup(B);c.find(".ui-closer").click(function(a){f.onClose(jQuery(c.selector));
return!1});c.find(".ui-del").click(function(a){a=jQuery(a.target).parents(".sf");0<a.siblings(".sf").length?(!0===f.datepickerFix&&void 0!==jQuery.fn.datepicker&&a.find(".hasDatepicker").datepicker("destroy"),a.remove()):(a.find("select[name='field']")[0].selectedIndex=0,a.find("select[name='op']")[0].selectedIndex=0,a.find(".data input").val(""),a.find(".data select").each(function(){this.selectedIndex=0}),a.find("select[name='field']").change(function(a){a.stopPropagation()}));return!1});c.find(".ui-add").click(function(a){a=
jQuery(a.target).parents(".sf");var b=a.clone(!0).insertAfter(a);b.find(".ui-state-default").removeClass("ui-state-hover ui-state-active");if(f.clone){b.find("select[name='field']")[0].selectedIndex=a.find("select[name='field']")[0].selectedIndex;null!=b.find("select[name='op']")[0]&&(b.find("select[name='op']").focus()[0].selectedIndex=a.find("select[name='op']")[0].selectedIndex);var d=b.find("select.vdata");null!=d[0]&&(d[0].selectedIndex=a.find("select.vdata")[0].selectedIndex)}else b.find(".data input").val(""),
b.find("select[name='field']").focus();!0===f.datepickerFix&&void 0!==jQuery.fn.datepicker&&a.find(".hasDatepicker").each(function(){var a=jQuery.data(this,"datepicker").settings;b.find("#"+this.id).unbind().removeAttr("id").removeClass("hasDatepicker").datepicker(a)});b.find("select[name='field']").change(function(a){a.stopPropagation()});return!1});c.find(".ui-search").click(function(a){a=jQuery(c.selector);var b,d=a.find("select[name='groupOp'] :selected").val();b=f.stringResult?'{"groupOp":"'+
d+'","rules":[':{groupOp:d,rules:[]};a.find(".sf").each(function(a){var d=jQuery(this).find("select[name='field'] :selected").val(),c=jQuery(this).find("select[name='op'] :selected").val(),e=jQuery(this).find("input.vdata,select.vdata :selected").val(),e=e+"";f.stringResult?(e=e.replace(/\\/g,"\\\\").replace(/\"/g,'\\"'),0<a&&(b+=","),b+='{"field":"'+d+'",',b+='"op":"'+c+'",',b+='"data":"'+e+'"}'):b.rules.push({field:d,op:c,data:e})});f.stringResult&&(b+="]}");f.onSearch(b);return!1});c.find(".ui-reset").click(function(a,
b){var d=jQuery(c.selector);d.find(".ui-del").click();d.find("select[name='groupOp']")[0].selectedIndex=0;f.onReset(b);return!1});c.find(".ui-add-last").click(function(){var a=jQuery(c.selector+" .sf:last"),b=a.clone(!0).insertAfter(a);b.find(".ui-state-default").removeClass("ui-state-hover ui-state-active");b.find(".data input").val("");b.find("select[name='field']").focus();!0===f.datepickerFix&&void 0!==jQuery.fn.datepicker&&a.find(".hasDatepicker").each(function(){var a=jQuery.data(this,"datepicker").settings;
b.find("#"+this.id).unbind().removeAttr("id").removeClass("hasDatepicker").datepicker(a)});b.find("select[name='field']").change(function(a){a.stopPropagation()});return!1});this.setGroupOp=function(a){selDOMobj=c.find("select[name='groupOp']")[0];var b={},d=selDOMobj.options.length,p;for(p=0;p<d;p++)b[selDOMobj.options[p].value]=p;selDOMobj.selectedIndex=b[a];jQuery(selDOMobj).change(function(a){a.stopPropagation()})};this.setFilter=function(a){var b=a.sfref;a=a.filter;var d=[],c,e,f,h,n={};selDOMobj=
b.find("select[name='field']")[0];c=0;for(f=selDOMobj.options.length;c<f;c++)n[selDOMobj.options[c].value]={index:c,ops:{}},d.push(selDOMobj.options[c].value);c=0;for(f=d.length;c<f;c++){if(selDOMobj=b.find(".ops > select[class='field"+c+"']")[0])for(e=0,h=selDOMobj.options.length;e<h;e++)n[d[c]].ops[selDOMobj.options[e].value]=e;if(selDOMobj=b.find(".data > select[class='field"+c+"']")[0])for(n[d[c]].data={},e=0,h=selDOMobj.options.length;e<h;e++)n[d[c]].data[selDOMobj.options[e].value]=e}var k,
g,l,m,d=a.field;n[d]&&(k=n[d].index);if(null!=k){g=n[d].ops[a.op];if(void 0===g)for(c=0,f=u.operators.length;c<f;c++)if(u.operators[c].op==a.op){g=c;break}l=a.data;m=null==n[d].data?-1:n[d].data[l]}if(null!=k&&null!=g&&null!=m){b.find("select[name='field']")[0].selectedIndex=k;b.find("select[name='field']").change();b.find("select[name='op']")[0].selectedIndex=g;b.find("input.vdata").val(l);if(b=b.find("select.vdata")[0])b.selectedIndex=m;return!0}return!1}}}(this,e,F)};
jQuery.fn.searchFilter.version="1.2.9";
jQuery.fn.searchFilter.defaults={clone:!0,datepickerFix:!0,onReset:function(e){alert("Reset Clicked. Data Returned: "+e)},onSearch:function(e){alert("Search Clicked. Data Returned: "+e)},onClose:function(e){e.hide()},groupOps:[{op:"AND",text:"all"},{op:"OR",text:"any"}],operators:[{op:"eq",text:"is equal to"},{op:"ne",text:"is not equal to"},{op:"lt",text:"is less than"},{op:"le",text:"is less or equal to"},{op:"gt",text:"is greater than"},{op:"ge",text:"is greater or equal to"},{op:"in",text:"is in"},
{op:"ni",text:"is not in"},{op:"bw",text:"begins with"},{op:"bn",text:"does not begin with"},{op:"ew",text:"ends with"},{op:"en",text:"does not end with"},{op:"cn",text:"contains"},{op:"nc",text:"does not contain"}],matchText:"match",rulesText:"rules",resetText:"Reset",searchText:"Search",stringResult:!0,windowTitle:"Search Rules",ajaxSelectOptions:{}};
