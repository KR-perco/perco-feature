switch(LANGUAGE_ID)
{
	case "ru":
		text_1 = "Интерактивный<br>каталог";
		text_2 = "Турникеты и электронные<br>проходные";
		text_3 = "Интерактивный каталог";
		break;
	case "en":
	case "de":
	case "it":
	case "es":
		text_1 = "Interactive<br>catalogue";
		text_2 = "Turnstiles &amp; IP-based<br>entrance control solutions";
		text_3 = "Interactive catalogue";
		break;
	case "fr":
		text_1 = "Catalogue<br>interactif";
		text_2 = "Serrures, tourniquets et<br>systèmes de contrôle d'accès<br>sur IP";
		text_3 = "Catalogue interactif";
		break;
}
(function(compId){"use strict";var _=null,y=true,n=false,x10='break-word',e25='${fon2}',g='image',x='text',x6='solid',m='rect',i='none',e30='${Text4}',x5='rgba(2,152,255,1.00)',x3='rgba(0,0,0,0)',p='px',o='opacity',lf='left',fs='font-size',e29='${strelka}',e28='${fon3}',e22='${Text3}',e27='${trid}',bc='border-color',x9='Arial, Helvetica, sans-serif',h='height',l='normal',e26='${video}',w='width',e24='${Text}',x15='none solid rgb(255, 255, 255)',x2='5.0.0.375',x1='5.0.0',x21='rgba(255,255,255,1)',tp='top',x14='400',x8='20',e23='${RoundRect}',x13='22',bg='background-color';var g18='trid.jpg',g20='strelka.png',g19='video.jpg',g11='fon2.jpg',g4='fon.jpg',g16='fon3.jpg';var s7=text_1,s12=text_2,s17=text_3;var im='/images/banners/',aud='media/',vid='media/',js='js/',fonts={},opts={'gAudioPreloadPreference':'auto','gVideoPreloadPreference':'auto'},resources=[],scripts=[],symbols={"stage":{v:x1,mv:x1,b:x2,stf:i,cg:i,rI:n,cn:{dom:[{id:'fon',t:g,r:['0px','0','351px','255px','auto','auto'],f:[x3,im+g4,'0px','0px']},{id:'RoundRect',t:m,r:['179px','10px','157px','65px','auto','auto'],br:["10px","10px","10px","10px"],o:1,f:[x5,[270,[['rgba(112,178,254,1.00)',0],['rgba(255,255,255,1.00)',25],['rgba(138,199,255,1.00)',53],['rgba(92,179,254,1.00)',100]]]],s:[2,"rgba(4,63,123,0.54)",x6],filter:[0,0,1,0.95890410958904,0,0,0,0,"rgba(2,30,55,1.00)",2,2,3]},{id:'Text',t:x,r:['185px','18px','149px','52px','auto','auto'],text:s7,align:"center",n:[x9,[x8,p],"rgba(255,255,255,1.00)",l,i,"",x10,""],filter:[0,0,1,1,0,0,0,0,"rgba(6,44,82,1.00)",1,1,2]},{id:'fon2',t:g,r:['0','0','351px','255px','auto','auto'],o:0,f:[x3,im+g11,'0px','0px']},{id:'Text3',t:x,r:['35px','7px','299px','52px','auto','auto'],o:0,text:s12,align:"center",n:[x9,[x13,p],"rgba(255,255,255,1)",x14,x15,l,x10,l],filter:[0,0,1,1,0,0,0,0,"rgba(3,41,71,1.00)",1,1,2]},{id:'fon3',t:g,r:['0px','0','351px','255px','auto','auto'],o:0,f:[x3,im+g16,'0px','0px']},{id:'Text4',t:x,r:['42px','6px','274px','21px','auto','auto'],o:0,text:s17,align:"center",n:[x9,[x13,p],"rgba(255,255,255,1)",x14,x15,l,x10,l]},{id:'trid',t:g,r:['279px','64px','0px','0px','auto','auto'],o:1,f:[x3,im+g18,'0px','0px']},{id:'video',t:g,r:['277px','131px','0px','0px','auto','auto'],o:1,f:[x3,im+g19,'0px','0px']},{id:'strelka',t:g,r:['392px','116px','46px','74px','auto','auto'],f:[x3,im+g20,'0px','0px']}],style:{'${Stage}':{isStage:true,r:['null','null','351px','255px','auto','auto'],overflow:'hidden',f:[x21]}}},tt:{d:13128,a:y,l:{"start":0},data:[["eid77",lf,3195,0,"linear",e22,'35px','35px'],["eid78",lf,4000,0,"linear",e22,'35px','35px'],["eid104","filter.drop-shadow.offsetH",3000,1000,"linear",e22,'0px','1px'],["eid15",bg,1250,0,"linear",e23,'rgba(2,152,255,1.00)','rgba(2,152,255,1.00)'],["eid48",bg,1815,0,"linear",e23,'rgba(2,152,255,1.00)','rgba(2,152,255,1.00)'],["eid53",bg,2195,0,"linear",e23,'rgba(2,152,255,1.00)','rgba(2,152,255,1.00)'],["eid286",lf,0,0,"linear",e24,'185px','185px'],["eid287",lf,13128,0,"linear",e24,'185px','185px'],["eid69",o,10,0,"linear",e25,'0','0'],["eid68",o,2195,805,"linear",e25,'0','1'],["eid259",o,12358,770,"linear",e25,'1','0'],["eid241",w,9866,884,"linear",e26,'0px','274px'],["eid248",w,11836,0,"linear",e26,'274px','274px'],["eid106","filter.drop-shadow.blur",3000,1000,"linear",e22,'0px','2px'],["eid242",h,9866,884,"linear",e26,'0px','162px'],["eid249",h,11836,0,"linear",e26,'162px','162px'],["eid23","filter.saturate",1250,0,"linear",e23,'0.95890410958904','0.95890410958904'],["eid62","filter.saturate",1815,380,"linear",e23,'0.958904','1.69'],["eid10","filter.drop-shadow.blur",1250,0,"linear",e23,'3px','3px'],["eid41","filter.drop-shadow.blur",1815,0,"linear",e23,'3px','3px'],["eid60","filter.drop-shadow.blur",2195,0,"linear",e23,'3px','3px'],["eid24","background-image",1250,0,"linear",e23,[270,[['rgba(0,105,225,1.00)',0],['rgba(100,177,254,1.00)',25],['rgba(0,135,255,1.00)',53],['rgba(0,59,110,1.00)',100]]],[270,[['rgba(0,105,225,1.00)',0],['rgba(100,177,254,1.00)',25],['rgba(0,135,255,1.00)',53],['rgba(0,59,110,1.00)',100]]]],["eid63","background-image",1815,380,"linear",e23,[270,[['rgba(0,105,225,1.00)',0],['rgba(100,177,254,1.00)',25],['rgba(0,135,255,1.00)',53],['rgba(0,59,110,1.00)',100]]],[270,[['rgba(112,178,254,1.00)',0],['rgba(255,255,255,1.00)',25],['rgba(138,199,255,1.00)',53],['rgba(92,179,254,1.00)',100]]]],["eid275","background-image",11500,858,"linear",e23,[270,[['rgba(112,178,254,1.00)',0],['rgba(255,255,255,1.00)',25],['rgba(138,199,255,1.00)',53],['rgba(92,179,254,1.00)',100]]],[270,[['rgba(0,105,225,1.00)',0],['rgba(100,177,254,1.00)',25],['rgba(0,135,255,1.00)',53],['rgba(0,59,110,1.00)',100]]]],["eid196",tp,6662,1088,"linear",e27,'64px','57px'],["eid215",tp,9000,0,"linear",e27,'57px','57px'],["eid105","filter.drop-shadow.offsetV",3000,1000,"linear",e22,'0px','1px'],["eid195",lf,6662,1088,"linear",e27,'279px','66px'],["eid214",lf,9000,0,"linear",e27,'66px','66px'],["eid12","filter.drop-shadow.offsetH",1250,0,"linear",e23,'2px','2px'],["eid43","filter.drop-shadow.offsetH",1815,0,"linear",e23,'2px','2px'],["eid58","filter.drop-shadow.offsetH",2195,0,"linear",e23,'2px','2px'],["eid116",tp,4000,0,"linear",e22,'7px','7px'],["eid236",lf,9866,884,"linear",e26,'277px','39px'],["eid246",lf,11836,0,"linear",e26,'39px','39px'],["eid103","filter.drop-shadow.color",3000,1000,"linear",e22,'rgba(0,0,0,0)','rgba(3,41,71,1.00)'],["eid167",o,3500,0,"linear",e28,'0','0'],["eid170",o,4625,1125,"linear",e28,'0.000000','1'],["eid261",o,12358,770,"linear",e28,'1','0'],["eid37",w,1250,395,"linear",e29,'46px','32px'],["eid39",w,1645,355,"linear",e29,'32px','46px'],["eid128",w,3500,0,"linear",e29,'46px','46px'],["eid160",w,4275,350,"linear",e29,'46px','32px'],["eid165",w,4625,375,"linear",e29,'32px','46px'],["eid189",w,6250,412,"linear",e29,'46px','32px'],["eid193",w,6662,408,"linear",e29,'32px','46px'],["eid207",w,7750,0,"linear",e29,'46px','46px'],["eid223",w,9500,366,"linear",e29,'46px','32px'],["eid230",w,9866,384,"linear",e29,'32px','46px'],["eid80",o,10,0,"linear",e22,'0','0'],["eid83",o,3000,195,"linear",e22,'0','1'],["eid82",o,4000,0,"linear",e22,'1','1'],["eid260",o,12358,770,"linear",e22,'1','0'],["eid13","filter.drop-shadow.offsetV",1250,0,"linear",e23,'2px','2px'],["eid42","filter.drop-shadow.offsetV",1815,0,"linear",e23,'2px','2px'],["eid59","filter.drop-shadow.offsetV",2195,0,"linear",e23,'2px','2px'],["eid11","filter.drop-shadow.color",1250,0,"linear",e23,'rgba(2,30,55,1.00)','rgba(2,30,55,1.00)'],["eid44","filter.drop-shadow.color",1815,0,"linear",e23,'rgba(2,30,55,1.00)','rgba(2,30,55,1.00)'],["eid57","filter.drop-shadow.color",2195,0,"linear",e23,'rgba(2,30,55,1.00)','rgba(2,30,55,1.00)'],["eid4",lf,10,1240,"linear",e29,'392px','282px'],["eid31",lf,1645,0,"linear",e29,'282px','282px'],["eid134",lf,3500,775,"linear",e29,'282px','179px'],["eid136",lf,4625,0,"linear",e29,'179px','179px'],["eid171",lf,5000,1250,"linear",e29,'179px','255px'],["eid181",lf,7070,0,"linear",e29,'255px','255px'],["eid205",lf,7750,0,"linear",e29,'255px','255px'],["eid209",lf,9500,0,"linear",e29,'255px','255px'],["eid219",lf,9866,0,"linear",e29,'255px','255px'],["eid244",lf,10250,1586,"linear",e29,'255px','369px'],["eid290",fs,0,0,"linear",e24,'20px','20px'],["eid291",fs,13128,0,"linear",e24,'20px','20px'],["eid250",o,11836,522,"linear",e26,'1','0'],["eid288",w,0,0,"linear",e24,'149px','149px'],["eid289",w,13128,0,"linear",e24,'149px','149px'],["eid278",h,0,0,"linear",e24,'52px','52px'],["eid279",h,13128,0,"linear",e24,'52px','52px'],["eid203",w,6662,1088,"linear",e27,'0px','238px'],["eid216",w,9000,0,"linear",e27,'238px','238px'],["eid30",lf,1250,0,"linear",e23,'179px','179px'],["eid50",lf,1815,0,"linear",e23,'179px','179px'],["eid51",lf,2195,0,"linear",e23,'179px','179px'],["eid234",tp,9866,884,"linear",e26,'131px','47px'],["eid247",tp,11836,0,"linear",e26,'47px','47px'],["eid5",tp,10,1240,"linear",e29,'268px','55px'],["eid112",tp,1645,0,"linear",e29,'55px','55px'],["eid135",tp,3500,775,"linear",e29,'55px','31px'],["eid137",tp,4625,0,"linear",e29,'31px','31px'],["eid172",tp,5000,1250,"linear",e29,'31px','42px'],["eid180",tp,7070,0,"linear",e29,'42px','42px'],["eid213",tp,7750,1750,"linear",e29,'42px','116px'],["eid232",tp,9866,0,"linear",e29,'116px','116px'],["eid245",tp,10250,1586,"linear",e29,'116px','152px'],["eid26",bc,1250,0,"linear",e23,'rgba(4,63,123,0.54)','rgba(4,63,123,0.54)'],["eid46",bc,1815,0,"linear",e23,'rgba(4,63,123,0.54)','rgba(4,63,123,0.54)'],["eid55",bc,2195,0,"linear",e23,'rgba(4,63,123,0.54)','rgba(4,63,123,0.54)'],["eid27","border-width",1250,0,"linear",e23,'2px','2px'],["eid47","border-width",1815,0,"linear",e23,'2px','2px'],["eid54","border-width",2195,0,"linear",e23,'2px','2px'],["eid176",o,3500,0,"linear",e30,'0','0'],["eid179",o,5000,1250,"linear",e30,'0','1'],["eid262",o,12358,770,"linear",e30,'1','0'],["eid21",o,1250,0,"linear",e23,'1','1'],["eid49",o,1815,0,"linear",e23,'1','1'],["eid108",o,2195,805,"linear",e23,'1','0'],["eid268",o,11500,858,"linear",e23,'0','1'],["eid270",o,13128,0,"linear",e23,'1','1'],["eid36",h,1250,395,"linear",e29,'74px','51px'],["eid38",h,1645,355,"linear",e29,'51px','74px'],["eid129",h,3500,0,"linear",e29,'74px','74px'],["eid162",h,4275,350,"linear",e29,'74px','51px'],["eid166",h,4625,375,"linear",e29,'51px','74px'],["eid190",h,6250,412,"linear",e29,'74px','51px'],["eid194",h,6662,408,"linear",e29,'51px','74px'],["eid208",h,7750,0,"linear",e29,'74px','74px'],["eid224",h,9500,366,"linear",e29,'74px','51px'],["eid231",h,9866,384,"linear",e29,'51px','74px'],["eid204",h,6662,1088,"linear",e27,'0px','142px'],["eid217",h,9000,0,"linear",e27,'142px','142px'],["eid218",o,9000,500,"linear",e27,'1','0'],["eid174",tp,3500,0,"linear",e30,'6px','6px'],["eid175",tp,5750,0,"linear",e30,'6px','6px']]}}};AdobeEdge.registerCompositionDefn(compId,symbols,fonts,scripts,resources,opts);})("EDGE-13406137");
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;Edge.registerEventBinding(compId,function($){
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",13128,function(sym,e){sym.play("start");});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})})(AdobeEdge.$,AdobeEdge,"EDGE-13406137");