(function(a){a.jgrid=a.jgrid||{};a.extend(!0,a.jgrid,{defaults:{locale:"me"},locales:{me:a.extend({},{isRTL:!1,defaults:{recordtext:"Pregled {0} - {1} od {2}",emptyrecords:"Ne postoji nijedan zapis",loadtext:"U\u010ditivanje...",pgtext:"Strana {0} od {1}",pgfirst:"First Page",pglast:"Last Page",pgnext:"Next Page",pgprev:"Previous Page",pgrecs:"Records per Page",showhide:"Toggle Expand Collapse Grid",savetext:"Saving..."},search:{caption:"Tra\u017eenje...",Find:"Tra\u017ei",Reset:"Resetuj",odata:[{oper:"eq",
text:"jednako"},{oper:"ne",text:"nije jednako"},{oper:"lt",text:"manje"},{oper:"le",text:"manje ili jednako"},{oper:"gt",text:"ve\u0107e"},{oper:"ge",text:"ve\u0107e ili jednako"},{oper:"bw",text:"po\u010dinje sa"},{oper:"bn",text:"ne po\u010dinje sa"},{oper:"in",text:"je u"},{oper:"ni",text:"nije u"},{oper:"ew",text:"zavr\u0161ava sa"},{oper:"en",text:"ne zavr\u0161ava sa"},{oper:"cn",text:"sadr\u017ei"},{oper:"nc",text:"ne sadr\u017ei"},{oper:"nu",text:"is null"},{oper:"nn",text:"is not null"}],
groupOps:[{op:"AND",text:"sva"},{op:"OR",text:"bilo koje"}],operandTitle:"Click to select search operation.",resetTitle:"Reset Search Value"},edit:{addCaption:"Dodaj zapis",editCaption:"Izmjeni zapis",bSubmit:"Po\u0161alji",bCancel:"Odustani",bClose:"Zatvori",saveData:"Podatak je izmjenjen! Sa\u010duvaj izmjene?",bYes:"Da",bNo:"Ne",bExit:"Odustani",msg:{required:"Polje je obavezno",number:"Unesite ispravan broj",minValue:"vrijednost mora biti ve\u0107a od ili jednaka sa ",maxValue:"vrijednost mora biti manja ili jednaka sa",
email:"nije ispravna email adresa, nije valjda da ne umije\u0161 ukucati mail!?",integer:"Ne zajebaji se unesi cjelobrojnu vrijednost ",date:"Unesite ispravan datum",url:"nije ispravan URL. Potreban je prefiks ('http://' or 'https://')",nodefined:" nije definisan!",novalue:" zahtjevana je povratna vrijednost!",customarray:"Prilago\u0111ena funkcija treba da vrati niz!",customfcheck:"Prilago\u0111ena funkcija treba da bude prisutana u slu\u010daju prilago\u0111ene provjere!"}},view:{caption:"Pogledaj zapis",
bClose:"Zatvori"},del:{caption:"Izbrisi",msg:"Izbrisi izabran(e) zapise(e)?",bSubmit:"Izbri\u0161i",bCancel:"Odbaci"},nav:{edittext:"",edittitle:"Izmjeni izabrani red",addtext:"",addtitle:"Dodaj novi red",deltext:"",deltitle:"Izbri\u0161i izabran red",searchtext:"",searchtitle:"Na\u0111i zapise",refreshtext:"",refreshtitle:"Ponovo u\u010ditaj podatke",alertcap:"Upozorenje",alerttext:"Izaberite red",viewtext:"",viewtitle:"Pogledaj izabrani red"},col:{caption:"Izaberi kolone",bSubmit:"OK",bCancel:"Odbaci"},
errors:{errcap:"Gre\u0161ka",nourl:"Nije postavljen URL",norecords:"Nema zapisa za obradu",model:"Du\u017eina modela colNames <> colModel!"},formatter:{integer:{thousandsSeparator:" ",defaultValue:"0"},number:{decimalSeparator:".",thousandsSeparator:" ",decimalPlaces:2,defaultValue:"0.00"},currency:{decimalSeparator:".",thousandsSeparator:" ",decimalPlaces:2,prefix:"",suffix:"",defaultValue:"0.00"},date:{dayNames:"Ned Pon Uto Sre \u010cet Pet Sub Nedelja Ponedeljak Utorak Srijeda \u010cetvrtak Petak Subota".split(" "),
monthNames:"Jan Feb Mar Apr Maj Jun Jul Avg Sep Okt Nov Dec Januar Februar Mart April Maj Jun Jul Avgust Septembar Oktobar Novembar Decembar".split(" "),AmPm:["am","pm","AM","PM"],S:function(a){return 11>a||13<a?["st","nd","rd","th"][Math.min((a-1)%10,3)]:"th"},srcformat:"Y-m-d",newformat:"d/m/Y",masks:{ShortDate:"n/j/Y",LongDate:"l, F d, Y",FullDateTime:"l, F d, Y g:i:s A",MonthDay:"F d",ShortTime:"g:i A",LongTime:"g:i:s A",YearMonth:"F, Y"}}}},{name:"Gora",nameEnglish:"Montenegrin"})}})})(jQuery);
