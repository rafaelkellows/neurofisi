$(function(){!function(){var validateEmail=function(email){var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;return re.test(email)},validateInput=function(val){var re=/^[^]+$/;return re.test(val)},_s,int,wW,neurofisi={init:function(){this.loading()},loading:function(){$(window).load(function(){$(document).ready(function(){setTimeout(function(){neurofisi.menu(),neurofisi.especialidades()},100)})})},rszWindow:function(){$(window).resize(function(){$(window).width()!=wW&&(wW=$(window).width(),$(".box-parallixit .bxn-parallixit").removeAttr("height"),setTimeout(function(){neurofisi.toTop(),$("html, body").animate({scrollTop:jQuery(this).scrollTop()+1},10),neurofisi.menu()},100),console.log("Change Size"))}).load(function(){wW=$(window).width()})},menu:function(){_m=$(),$("body main header nav a:first-child").click(function(){$(this).parent().toggleClass("active")})},especialidades:function(){var _e=$("body main.oquefazemos section.carrossel"),_fbase,_findex;if(_e.length&&(_fwidth=0,_fbase=0,_findex=0,_e.find("figure").each(function(){_fwidth+=eval($(this).outerWidth()+36),_fbase=$(this).outerWidth()}),_e.find(">div").css("width",_fwidth),_e.find("nav a").click(function(){switch(_nav=$(this).attr("class"),_nav){case"prev":if(_cL=parseFloat(_e.find(">div").css("left")),_cL>=0){_findex=0;break}_findex--,console.log(_findex),_e.find(">div").css("left",-((_fbase+36)*_findex));break;case"next":if(_cL=parseFloat(_e.find(">div").css("left")),Math.abs(_cL)>=_fwidth-3*(_fbase+36))break;_findex++,console.log(_findex),_e.find(">div").css("left",-((_fbase+36)*_findex))}}),_e.find("div figure a").click(function(){_article=$(this).attr("class"),$(this).closest(".oquefazemos").find("figure").removeClass("active"),$(this).closest("figure").addClass("active"),$(this).closest(".oquefazemos").find("article").hide(),$(this).closest(".oquefazemos").find("article."+_article).fadeIn("fast"),_offset=$(this).closest(".oquefazemos").find("article."+_article).offset(),_duration=500,jQuery("html, body").animate({scrollTop:_offset.top-300},_duration)})),window.location.hash)switch(_h=window.location.hash.substring(1),_offset=$("#especialidades").offset(),_duration=500,_h){case"especialidades":jQuery("html, body").animate({scrollTop:_offset.top-300},_duration);break;case"palmilha_postural":_e.find("div figure:eq(0) a").click();break;case"fisioterapia":_e.find("div figure:eq(1) a").click();break;case"psiquiatria_neurociencia":_e.find("div figure:eq(2) a").click();break;case"pilates_reeducacao":_e.find("div figure:eq(3) a").click(),_findex=3,_e.find(">div").css("left",-(3*(_fbase+36)));break;case"bioimpedancia_esporte":_e.find("div figure:eq(4) a").click(),_findex=4,_e.find(">div").css("left",-(4*(_fbase+36)));break;case"neurologia_cirg_coluna":_e.find("div figure:eq(5) a").click(),_findex=5,_e.find(">div").css("left",-(5*(_fbase+36)));break;case"med_atv_fisica_esporte":_e.find("div figure:eq(6) a").click(),_findex=6,_e.find(">div").css("left",-(6*(_fbase+36)));break;case"cond_aerobio_musculacao":_e.find("div figure:eq(7) a").click(),_findex=7,_e.find(">div").css("left",-(7*(_fbase+36)));break;case"cursos_ministrados":_e.find("div figure:eq(8) a").click(),_findex=8,_e.find(">div").css("left",-(8*(_fbase+36)))}}};neurofisi.init()}()});