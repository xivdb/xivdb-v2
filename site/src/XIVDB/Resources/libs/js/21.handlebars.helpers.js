if (typeof Handlebars !== 'undefined') {
	Handlebars.registerHelper("x",function(e,r){var n,t=function(){};try{t=Function.apply(this,["window","return "+e+";"])}catch(s){console.warn("[warning] {{x "+e+"}} is invalid javascript",s)}try{n=t.call(this,window)}catch(s){console.warn("[warning] {{x "+e+"}} runtime error",s)}return n}),Handlebars.registerHelper("xif",function(e,r){return Handlebars.helpers.x.apply(this,[e,r])?r.fn(this):r.inverse(this)}),Handlebars.registerHelper("z",function(){var e=arguments[arguments.length-1];return delete arguments[arguments.length-1],Handlebars.helpers.x.apply(this,[Array.prototype.slice.call(arguments,0).join(""),e])}),Handlebars.registerHelper("zif",function(){var e=arguments[arguments.length-1];return delete arguments[arguments.length-1],Handlebars.helpers.x.apply(this,[Array.prototype.slice.call(arguments,0).join(""),e])?e.fn(this):e.inverse(this)}),Handlebars.registerHelper("iif",function(e,r,n,t){switch(r){case"==":return e==n?t.fn(this):t.inverse(this);case"===":return e===n?t.fn(this):t.inverse(this);case"<":return n>e?t.fn(this):t.inverse(this);case"<=":return n>=e?t.fn(this):t.inverse(this);case">":return e>n?t.fn(this):t.inverse(this);case">=":return e>=n?t.fn(this):t.inverse(this);case"&&":return e&&n?t.fn(this):t.inverse(this);case"||":return e||n?t.fn(this):t.inverse(this);default:return t.inverse(this)}});
}
