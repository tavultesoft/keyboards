if(typeof keyman === 'undefined') {console.log('Keyboard requires KeymanWeb 10.0 or later');if(typeof tavultesoft !== 'undefined') tavultesoft.keymanweb.util.alert("This keyboard requires KeymanWeb 10.0 or later");} else {KeymanWeb.KR(new Keyboard_burushaski_urdu_phonetic());}function Keyboard_burushaski_urdu_phonetic(){this.KI="Keyboard_burushaski_urdu_phonetic";this.KN="Burushãski Girminãs Urdu";this.KMINVER="10.0";this.KV={F:' 1em "Urdu Typesetting"',K102:0};this.KV.KLS={"shift-ctrl": ["","ݳ","ݳ","ݸ","ݹ","ݻ","ݺ","ݶ","ݵ","","","","","","","","","","","","","ݷ","","","","","","","","","","","","ݽ","ڏ","","","","ڞ","","","","","","","","","","","ژ","څ","ݼ","","","ݣ","","","","","","","","","",""],"shift": ["!",",","؍","؍","ء","ي","ؐ","ٔ","ٌ",")","(","(",")","","","","ْ","ﷺ","ؑ","ڑ","ٹ","؁","ٗ","ٰ","ۃ","ۃ","ُ","‘","","","","","ٓ","ص","ڈ","ٖ","غ","ح","ض","خ","ؒ",":","ـ","","","","","","","ذ","ژ","ث","ظ","ؓ","ں","إ","ِ","َ","؟","","","","","",""],"default": ["ٍ","۱","۲","۳","۴","۵","۶","۷","۸","۹","۰","أ","ؤ","","","","ق","و","ع","ر","ت","ے","ئ","ی","ہ","پ","]","[","؎","","","","ا","س","د","ف","گ","ھ","ج","ک","ل","؛","۔","","","","","","","ز","ش","چ","ط","ب","ن","م","،","۔","ْ","","","","","",""],"alt": ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","ڃ","","","","","","","","","","","","",""]};this.KV.BK=(function(x){var e=Array.apply(null,Array(65)).map(String.prototype.valueOf,""),r=[],v,i,m=['default','shift','ctrl','shift-ctrl','alt','shift-alt','ctrl-alt','shift-ctrl-alt'];for(i=m.length-1;i>=0;i--)if((v=x[m[i]])||r.length)r=(v?v:e).slice().concat(r);return r})(this.KV.KLS);this.KDU=0;this.KH='';this.KM=0;this.KBVER="1.2";this.KMBM=0x0070;this.KRTL=1;this.KVKL={"tablet":{"layer":[{"id":"default","row":[{"id":1,"key":[{"id":"K_Q","text":"\u0642"},{"id":"K_W","text":"\u0648","sk":[{"text":"\u0778","id":"U_0778"},{"text":"\u0779","id":"U_0779"}]},{"id":"K_E","text":"\u0639"},{"id":"K_R","text":"\u0631"},{"id":"K_T","text":"\u062A"},{"id":"K_Y","text":"\u06D2","sk":[{"text":"\u077A","id":"U_077A"},{"text":"\u077B","id":"U_077B"}]},{"id":"K_U","text":"\u0621"},{"id":"K_I","text":"\u06CC","sk":[{"text":"\u0775","id":"U_0775"},{"text":"\u0776","id":"U_0776"},{"text":"\u0777","id":"U_0777"}]},{"id":"K_O","text":"\u06C1"},{"id":"K_P","text":"\u067E"}]},{"id":2,"key":[{"id":"K_A","text":"\u0627","pad":"50","sk":[{"text":"\u0773","id":"U_0773"},{"text":"\u0774","id":"U_0774"}]},{"id":"K_S","text":"\u0633","sk":[{"text":"\u077D","id":"U_077D"}]},{"id":"K_D","text":"\u062F","sk":[{"text":"\u068F","id":"U_068F"}]},{"id":"K_F","text":"\u0641"},{"id":"K_G","text":"\u06AF"},{"id":"K_H","text":"\u06BE"},{"id":"K_J","text":"\u062C","sk":[{"text":"\u069E","id":"U_069E"}]},{"id":"K_K","text":"\u0643"},{"id":"K_L","text":"\u0644"},{"id":"T_new_77","text":"","width":"10","sp":"10"}]},{"id":3,"key":[{"id":"K_SHIFT","text":"*Shift*","sp":"1","nextlayer":"shift"},{"id":"K_Z","text":"\u0632","sk":[{"text":"\u0698","id":"U_0698"}]},{"id":"K_X","text":"\u0634","sk":[{"text":"\u0685","id":"U_0685"}]},{"id":"K_C","text":"\u0686","sk":[{"text":"\u077C","id":"U_077C"}]},{"id":"K_V","text":"\u0637"},{"id":"K_B","text":"\u0628"},{"id":"K_N","text":"\u0646","sk":[{"text":"\u0763","id":"U_0763"}]},{"id":"K_M","text":"\u0645"},{"id":"K_PERIOD","text":"\u06D4","sk":[{"text":"!","id":"K_1","layer":"shift"},{"text":"\u061F","id":"K_SLASH","layer":"shift"},{"text":"'","id":"K_QUOTE"},{"text":"\"","id":"K_QUOTE","layer":"shift"},{"text":":","id":"K_COLON","layer":"shift"},{"text":"\u061B","id":"K_COLON"},{"text":"\u060C","id":"K_COMMA"}]},{"id":"K_BKSP","text":"*BkSp*","width":"100","sp":"1"}]},{"id":4,"key":[{"id":"K_NUMLOCK","text":"*123*","width":"150","sp":"1","nextlayer":"numeric"},{"id":"K_LOPT","text":"*Menu*","width":"120","sp":"1"},{"id":"K_SPACE","text":"","width":"610","sp":"0"},{"id":"K_ENTER","text":"*Enter*","width":"150","sp":"1"}]}]},{"id":"shift","row":[{"id":1,"key":[{"id":"K_Q","text":"\u0652"},{"id":"K_W","text":"\uFDFA"},{"id":"K_E","text":"\u0611"},{"id":"K_R","text":"\u0691"},{"id":"K_T","text":"\u0679"},{"id":"K_BKQUOTE","text":"\u064B","layer":"shift"},{"id":"K_U","text":"\u060C"},{"id":"K_I","text":"\u0670"},{"id":"K_O","text":"\u06C3"},{"id":"K_P","text":"\u064F"}]},{"id":2,"key":[{"id":"K_A","text":"\u0653","pad":"50"},{"id":"K_S","text":"\u0635"},{"id":"K_D","text":"\u0688"},{"id":"K_F","text":"\u0656"},{"id":"K_G","text":"\u063A"},{"id":"K_H","text":"\u062D"},{"id":"K_J","text":"\u0636"},{"id":"K_K","text":"\u062E"},{"id":"K_L","text":"\u0612"},{"id":"T_new_707","text":"","width":"10","sp":"10"}]},{"id":3,"key":[{"id":"K_SHIFT","text":"*Shift*","sp":"2","nextlayer":"default"},{"id":"K_Z","text":"\u0630"},{"id":"K_X","text":"\u0698"},{"id":"K_C","text":"\u062B"},{"id":"K_V","text":"\u0638"},{"id":"K_B","text":"\u0613"},{"id":"K_N","text":"\u06BA"},{"id":"K_BKQUOTE","text":"\u064D","layer":"default"},{"id":"K_PERIOD","text":"\u064E","sk":[{"text":"!","id":"K_1","layer":"shift"},{"text":"\u061F","id":"K_SLASH","layer":"shift"},{"text":"'","id":"K_QUOTE","layer":"default"},{"text":"\"","id":"K_QUOTE","layer":"shift"},{"text":":","id":"K_COLON","layer":"shift"},{"text":"\u061B","id":"K_COLON","layer":"default"},{"text":"\u060C","id":"K_COMMA","layer":"default"}]},{"id":"K_BKSP","text":"*BkSp*","sp":"1"}]},{"id":4,"key":[{"id":"K_NUMLOCK","text":"*123*","width":"150","sp":"1","nextlayer":"numeric"},{"id":"K_LOPT","text":"*Menu*","width":"120","sp":"1"},{"id":"K_SPACE","text":"","width":"610","sp":"0"},{"id":"K_ENTER","text":"*Enter*","width":"150","sp":"1"}]}]},{"id":"numeric","row":[{"id":1,"key":[{"id":"K_1","text":"1"},{"id":"K_2","text":"2"},{"id":"K_3","text":"3"},{"id":"K_4","text":"4"},{"id":"K_5","text":"5"},{"id":"K_6","text":"6"},{"id":"K_7","text":"7"},{"id":"K_8","text":"8"},{"id":"K_9","text":"9"},{"id":"K_0","text":"0"}]},{"id":2,"key":[{"id":"K_1","text":"\u0661","pad":"50","layer":"alt"},{"id":"K_2","text":"\u0662","layer":"alt"},{"id":"K_3","text":"\u0663","layer":"alt"},{"id":"K_4","text":"\u0664","layer":"alt"},{"id":"K_5","text":"\u0665","layer":"alt"},{"id":"K_6","text":"\u0666","layer":"alt"},{"id":"K_7","text":"\u0667","layer":"alt"},{"id":"K_8","text":"\u0668","layer":"alt"},{"id":"K_9","text":"\u0669","layer":"alt"},{"id":"T_new_111","text":"","width":"10","sp":"10"}]},{"id":3,"key":[{"id":"K_LBRKT","text":"]","pad":"110","sk":[{"text":"\u00AB","id":"U_00AB"},{"text":"<","id":"U_003C"},{"text":"{","id":"K_LBRKT","layer":"shift"}]},{"id":"K_9","text":")","layer":"shift"},{"id":"K_0","text":"(","layer":"shift"},{"id":"K_RBRKT","text":"[","sk":[{"text":"\u00BB","id":"U_00BB"},{"text":">","id":"U_003E"},{"text":"}","id":"K_RBRKT","layer":"shift"}]},{"id":"K_SLASH","text":"\u066A","layer":"ctrl"},{"id":"K_SLASH","text":"\/"},{"id":"K_BKSLASH","text":"\\","layer":"default"},{"id":"K_0","text":"\u0660","layer":"alt"},{"id":"K_BKSP","text":"*BkSp*","width":"100","sp":"1"}]},{"id":4,"key":[{"id":"K_NUMLOCK","text":"*123*","width":"150","sp":"2","nextlayer":"default"},{"id":"K_LOPT","text":"*Menu*","width":"120","sp":"1"},{"id":"K_SPACE","text":"","width":"610","sp":"0"},{"id":"K_ENTER","text":"*Enter*","width":"150","sp":"1"}]}]}],"fontsize":"14pk","displayUnderlying":false,"font":"Jameel Noori Nastaleeq"},"phone":{"layer":[{"id":"default","row":[{"id":1,"key":[{"id":"K_Q","text":"\u0642"},{"id":"K_W","text":"\u0648","sk":[{"text":"\u0778","id":"U_0778"},{"text":"\u0779","id":"U_0779"}]},{"id":"K_E","text":"\u0639"},{"id":"K_R","text":"\u0631"},{"id":"K_T","text":"\u062A"},{"id":"K_Y","text":"\u06D2","sk":[{"text":"\u077A","id":"U_077A"},{"text":"\u077B","id":"U_077B"}]},{"id":"K_U","text":"\u0621"},{"id":"K_I","text":"\u06CC","sk":[{"text":"\u0775","id":"U_0775"},{"text":"\u0776","id":"U_0776"},{"text":"\u0777","id":"U_0777"}]},{"id":"K_O","text":"\u06C1"},{"id":"K_P","text":"\u067E"}]},{"id":2,"key":[{"id":"K_A","text":"\u0627","pad":"50","sk":[{"text":"\u0773","id":"U_0773"},{"text":"\u0774","id":"U_0774"}]},{"id":"K_S","text":"\u0633","sk":[{"text":"\u077D","id":"U_077D"}]},{"id":"K_D","text":"\u062F","sk":[{"text":"\u068F","id":"U_068F"}]},{"id":"K_F","text":"\u0641"},{"id":"K_G","text":"\u06AF"},{"id":"K_H","text":"\u06BE"},{"id":"K_J","text":"\u062C","sk":[{"text":"\u069E","id":"U_069E"}]},{"id":"K_K","text":"\u0643"},{"id":"K_L","text":"\u0644"},{"id":"T_new_77","text":"","width":"10","sp":"10"}]},{"id":3,"key":[{"id":"K_SHIFT","text":"*Shift*","sp":"1","nextlayer":"shift"},{"id":"K_Z","text":"\u0632","sk":[{"text":"\u0698","id":"U_0698"}]},{"id":"K_X","text":"\u0634","sk":[{"text":"\u0685","id":"U_0685"}]},{"id":"K_C","text":"\u0686","sk":[{"text":"\u077C","id":"U_077C"}]},{"id":"K_V","text":"\u0637"},{"id":"K_B","text":"\u0628"},{"id":"K_N","text":"\u0646","sk":[{"text":"\u0763","id":"U_0763"}]},{"id":"K_M","text":"\u0645"},{"id":"K_PERIOD","text":"\u06D4","sk":[{"text":"!","id":"K_1","layer":"shift"},{"text":"\u061F","id":"K_SLASH","layer":"shift"},{"text":"'","id":"K_QUOTE"},{"text":"\"","id":"K_QUOTE","layer":"shift"},{"text":":","id":"K_COLON","layer":"shift"},{"text":"\u061B","id":"K_COLON"},{"text":"\u060C","id":"K_COMMA"}]},{"id":"K_BKSP","text":"*BkSp*","width":"100","sp":"1"}]},{"id":4,"key":[{"id":"K_NUMLOCK","text":"*123*","width":"150","sp":"1","nextlayer":"numeric"},{"id":"K_LOPT","text":"*Menu*","width":"120","sp":"1"},{"id":"K_SPACE","text":"","width":"610","sp":"0"},{"id":"K_ENTER","text":"*Enter*","width":"150","sp":"1"}]}]},{"id":"shift","row":[{"id":1,"key":[{"id":"K_Q","text":"\u0652"},{"id":"K_W","text":"\uFDFA"},{"id":"K_E","text":"\u0611"},{"id":"K_R","text":"\u0691"},{"id":"K_T","text":"\u0679"},{"id":"K_BKQUOTE","text":"\u064B","layer":"shift"},{"id":"K_U","text":"\u060C"},{"id":"K_I","text":"\u0670"},{"id":"K_O","text":"\u06C3"},{"id":"K_P","text":"\u064F"}]},{"id":2,"key":[{"id":"K_A","text":"\u0653","pad":"50"},{"id":"K_S","text":"\u0635"},{"id":"K_D","text":"\u0688"},{"id":"K_F","text":"\u0656"},{"id":"K_G","text":"\u063A"},{"id":"K_H","text":"\u062D"},{"id":"K_J","text":"\u0636"},{"id":"K_K","text":"\u062E"},{"id":"K_L","text":"\u0612"},{"id":"T_new_707","text":"","width":"10","sp":"10"}]},{"id":3,"key":[{"id":"K_SHIFT","text":"*Shift*","sp":"2","nextlayer":"default"},{"id":"K_Z","text":"\u0630"},{"id":"K_X","text":"\u0698"},{"id":"K_C","text":"\u062B"},{"id":"K_V","text":"\u0638"},{"id":"K_B","text":"\u0613"},{"id":"K_N","text":"\u06BA"},{"id":"K_BKQUOTE","text":"\u064D","layer":"default"},{"id":"K_PERIOD","text":"\u064E","sk":[{"text":"!","id":"K_1","layer":"shift"},{"text":"\u061F","id":"K_SLASH","layer":"shift"},{"text":"'","id":"K_QUOTE","layer":"default"},{"text":"\"","id":"K_QUOTE","layer":"shift"},{"text":":","id":"K_COLON","layer":"shift"},{"text":"\u061B","id":"K_COLON","layer":"default"},{"text":"\u060C","id":"K_COMMA","layer":"default"}]},{"id":"K_BKSP","text":"*BkSp*","sp":"1"}]},{"id":4,"key":[{"id":"K_NUMLOCK","text":"*123*","width":"150","sp":"1","nextlayer":"numeric"},{"id":"K_LOPT","text":"*Menu*","width":"120","sp":"1"},{"id":"K_SPACE","text":"","width":"610","sp":"0"},{"id":"K_ENTER","text":"*Enter*","width":"150","sp":"1"}]}]},{"id":"numeric","row":[{"id":1,"key":[{"id":"K_1","text":"1"},{"id":"K_2","text":"2"},{"id":"K_3","text":"3"},{"id":"K_4","text":"4"},{"id":"K_5","text":"5"},{"id":"K_6","text":"6"},{"id":"K_7","text":"7"},{"id":"K_8","text":"8"},{"id":"K_9","text":"9"},{"id":"K_0","text":"0"}]},{"id":2,"key":[{"id":"K_1","text":"\u0661","pad":"50","layer":"alt"},{"id":"K_2","text":"\u0662","layer":"alt"},{"id":"K_3","text":"\u0663","layer":"alt"},{"id":"K_4","text":"\u0664","layer":"alt"},{"id":"K_5","text":"\u0665","layer":"alt"},{"id":"K_6","text":"\u0666","layer":"alt"},{"id":"K_7","text":"\u0667","layer":"alt"},{"id":"K_8","text":"\u0668","layer":"alt"},{"id":"K_9","text":"\u0669","layer":"alt"},{"id":"T_new_111","text":"","width":"10","sp":"10"}]},{"id":3,"key":[{"id":"K_LBRKT","text":"]","pad":"110","sk":[{"text":"\u00AB","id":"U_00AB"},{"text":"<","id":"U_003C"},{"text":"{","id":"K_LBRKT","layer":"shift"}]},{"id":"K_9","text":")","layer":"shift"},{"id":"K_0","text":"(","layer":"shift"},{"id":"K_RBRKT","text":"[","sk":[{"text":"\u00BB","id":"U_00BB"},{"text":">","id":"U_003E"},{"text":"}","id":"K_RBRKT","layer":"shift"}]},{"id":"K_SLASH","text":"\u066A","layer":"ctrl"},{"id":"K_SLASH","text":"\/"},{"id":"K_BKSLASH","text":"\\","layer":"default"},{"id":"K_0","text":"\u0660","layer":"alt"},{"id":"K_BKSP","text":"*BkSp*","width":"100","sp":"1"}]},{"id":4,"key":[{"id":"K_NUMLOCK","text":"*123*","width":"150","sp":"2","nextlayer":"default"},{"id":"K_LOPT","text":"*Menu*","width":"120","sp":"1"},{"id":"K_SPACE","text":"","width":"610","sp":"0"},{"id":"K_ENTER","text":"*Enter*","width":"150","sp":"1"}]}]}],"fontsize":"14pk","displayUnderlying":false,"font":"Jameel Noori Nastaleeq"}};this.KVER="12.0.64.0";this.gs=function(t,e) {return this.g0(t,e);};this.g0=function(t,e) {var k=KeymanWeb,r=0,m=0;if(k.KKM(e,16432,49)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݳ");}}else if(k.KKM(e,16400,49)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,",");}}else if(k.KKM(e,16400,222)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ـ");}}else if(k.KKM(e,16432,51)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݸ");}}else if(k.KKM(e,16400,51)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"؍");}}else if(k.KKM(e,16432,52)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݹ");}}else if(k.KKM(e,16400,52)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ء");}}else if(k.KKM(e,16432,53)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݻ");}}else if(k.KKM(e,16400,53)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ي");}}else if(k.KKM(e,16432,55)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݶ");}}else if(k.KKM(e,16400,55)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٔ");}}else if(k.KKM(e,16384,222)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۔");}}else if(k.KKM(e,16400,57)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,")");}}else if(k.KKM(e,16400,48)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"(");}}else if(k.KKM(e,16432,56)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݵ");}}else if(k.KKM(e,16400,56)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٌ");}}else if(k.KKM(e,16400,187)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,")");}}else if(k.KKM(e,16384,188)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"،");}}else if(k.KKM(e,16384,189)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"أ");}}else if(k.KKM(e,16384,190)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۔");}}else if(k.KKM(e,16384,191)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ْ");}}else if(k.KKM(e,16384,48)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۰");}}else if(k.KKM(e,16384,49)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۱");}}else if(k.KKM(e,16384,50)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۲");}}else if(k.KKM(e,16384,51)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۳");}}else if(k.KKM(e,16384,52)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۴");}}else if(k.KKM(e,16384,53)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۵");}}else if(k.KKM(e,16384,54)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۶");}}else if(k.KKM(e,16384,55)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۷");}}else if(k.KKM(e,16384,56)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۸");}}else if(k.KKM(e,16384,57)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"۹");}}else if(k.KKM(e,16400,186)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,":");}}else if(k.KKM(e,16384,186)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"؛");}}else if(k.KKM(e,16400,188)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ِ");}}else if(k.KKM(e,16384,187)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ؤ");}}else if(k.KKM(e,16400,190)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"َ");}}else if(k.KKM(e,16400,191)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"؟");}}else if(k.KKM(e,16432,50)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݳ");}}else if(k.KKM(e,16400,50)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"؍");}}else if(k.KKM(e,16400,65)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٓ");}}else if(k.KKM(e,16400,66)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ؓ");}}else if(k.KKM(e,16432,67)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݼ");}}else if(k.KKM(e,16400,67)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ث");}}else if(k.KKM(e,16432,68)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ڏ");}}else if(k.KKM(e,16400,68)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ڈ");}}else if(k.KKM(e,16400,69)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ؑ");}}else if(k.KKM(e,16400,70)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٖ");}}else if(k.KKM(e,16400,71)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"غ");}}else if(k.KKM(e,16400,72)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ح");}}else if(k.KKM(e,16400,73)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٰ");}}else if(k.KKM(e,16432,74)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ڞ");}}else if(k.KKM(e,16400,74)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ض");}}else if(k.KKM(e,16400,75)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"خ");}}else if(k.KKM(e,16400,76)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ؒ");}}else if(k.KKM(e,16400,77)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"إ");}}else if(k.KKM(e,16432,78)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݣ");}}else if(k.KKM(e,16400,78)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ں");}}else if(k.KKM(e,16400,79)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ۃ");}}else if(k.KKM(e,16400,80)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ۃ");}}else if(k.KKM(e,16400,81)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ْ");}}else if(k.KKM(e,16400,82)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ڑ");}}else if(k.KKM(e,16432,83)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݽ");}}else if(k.KKM(e,16400,83)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ص");}}else if(k.KKM(e,16400,84)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٹ");}}else if(k.KKM(e,16400,85)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٗ");}}else if(k.KKM(e,16400,86)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ظ");}}else if(k.KKM(e,16400,87)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ﷺ");}}else if(k.KKM(e,16432,88)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"څ");}}else if(k.KKM(e,16400,88)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ژ");}}else if(k.KKM(e,16432,89)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݷ");}}else if(k.KKM(e,16400,89)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"؁");}}else if(k.KKM(e,16432,90)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ژ");}}else if(k.KKM(e,16400,90)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ذ");}}else if(k.KKM(e,16384,219)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"]");}}else if(k.KKM(e,16384,220)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"؎");}}else if(k.KKM(e,16384,221)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"[");}}else if(k.KKM(e,16432,54)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ݺ");}}else if(k.KKM(e,16400,54)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ؐ");}}else if(k.KKM(e,16400,189)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"(");}}else if(k.KKM(e,16384,192)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ٍ");}}else if(k.KKM(e,16384,65)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ا");}}else if(k.KKM(e,16384,66)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ب");}}else if(k.KKM(e,16384,67)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"چ");}}else if(k.KKM(e,16448,67)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ڃ");}}else if(k.KKM(e,16384,68)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"د");}}else if(k.KKM(e,16384,69)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ع");}}else if(k.KKM(e,16384,70)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ف");}}else if(k.KKM(e,16384,71)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"گ");}}else if(k.KKM(e,16384,72)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ھ");}}else if(k.KKM(e,16384,73)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ی");}}else if(k.KKM(e,16384,74)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ج");}}else if(k.KKM(e,16384,75)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ک");}}else if(k.KKM(e,16384,76)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ل");}}else if(k.KKM(e,16384,77)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"م");}}else if(k.KKM(e,16384,78)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ن");}}else if(k.KKM(e,16384,79)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ہ");}}else if(k.KKM(e,16384,80)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"پ");}}else if(k.KKM(e,16384,81)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ق");}}else if(k.KKM(e,16384,82)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ر");}}else if(k.KKM(e,16384,83)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"س");}}if(m) {}else if(k.KKM(e,16384,84)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ت");}}else if(k.KKM(e,16384,85)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ئ");}}else if(k.KKM(e,16384,86)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ط");}}else if(k.KKM(e,16384,87)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"و");}}else if(k.KKM(e,16384,88)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ش");}}else if(k.KKM(e,16384,89)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ے");}}else if(k.KKM(e,16384,90)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ز");}}else if(k.KKM(e,16400,219)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"ُ");}}else if(k.KKM(e,16400,221)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"‘");}}else if(k.KKM(e,16400,192)) {if(1){r=m=1;k.KDC(0,t);k.KO(-1,t,"!");}}return r;};}