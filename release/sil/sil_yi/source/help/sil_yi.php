<?php
  $pagename = 'SIL Yi Keyboard Help';
  $pagetitle = 'Yi Keyboard Help';
  $pagestyle = <<<END
  table.inputSequences {  border: 1px solid #1C6EA4;  background-color: #FFFFFF; text-align: left;  border-collapse: collapse;}
  table.inputSequences td, table.inputSequences th {  border: 1px solid #FFFFFF;  padding: 3px 6px;  text-align:center;}
  table.inputSequences tr:nth-child(even) {  background: #D0E4F5;}
  table.inputSequences thead th {  font-weight: bold; }
  table.inputSequences thead th:first-child {  border-left: none;}
  table.inputSequences tfoot td {  font-size: 14px;}
  table.inputSequences tfoot .links {  text-align: right;}
  table.inputSequences tfoot .links a{  display: inline-block;  background: #1C6EA4;  color: #FFFFFF;  padding: 2px 8px;  border-radius: 5px;}
  table.inputSequences tr td.glyph {font-size: 1.7rem;}
  table+table {margin-top: 3.0rem;}
  .important {text-align: center;font-size: 1.2rem;background-color: #D0E4F5;padding-top:1.2rem;padding-bottom:1.2rem;max-width:850px;margin-left:auto;margin-right: auto; }
  .centered {text-align: center; }
  p.centered+table {margin-top:2.0rem; }
  .glyph.yi {font-family:'Microsoft Yi Baiti', 'Noto Sans Yi', NSimSun-18030, SimSun-18030, 'SIL Yi', Code2000; }
  table {table-layout: fixed; }
  td:first-child, th:first-child {position:sticky;left:0;z-index:1;background-color:black;color: white; }
  thead tr th {position:sticky;top:0;background-color: black;color: white;}
  th:first-child, th:last-child {z-index:2; /*background-color:red; */}
END;
  require_once('header.php');
?>







<h2>Typing Yi syllabes</h2>
<p class="important">To type a Yi syllable, type the pinyin romanization for that
syllable, followed by a space.</p>
<table class="inputSequences" id="yiTable">
    <thead>
         <tr>
            <th>&nbsp;</th>
            <th>-</th>
            <th>b</th>
            <th>p</th>
            <th>bb</th>
            <th>nb</th>
            <th>hm</th>
            <th>m</th>
            <th>f</th>
            <th>v</th>
            <th>d</th>
            <th>t</th>
            <th>dd</th>
            <th>nd</th>
            <th>hn</th>
            <th>n</th>
            <th>hl</th>
            <th>l</th>
            <th>g</th>
            <th>k</th>
            <th>gg</th>
            <th>mg</th>
            <th>hx</th>
            <th>ng</th>
            <th>h</th>
            <th>w</th>
            <th>z</th>
            <th>c</th>
            <th>zz</th>
            <th>nz</th>
            <th>s</th>
            <th>ss</th>
            <th>zh</th>
            <th>ch</th>
            <th>rr</th>
            <th>nr</th>
            <th>sh</th>
            <th>r</th>
            <th>j</th>
            <th>q</th>
            <th>jj</th>
            <th>nj</th>
            <th>ny</th>
            <th>x</th>
            <th>y</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="rowHeader">it</th>
            <td class="glyph yi" title="U+A000: YI SYLLABLE IT">ꀀ</td>
            <td class="glyph yi" title="U+A016: YI SYLLABLE BIT">ꀖ</td>
            <td class="glyph yi" title="U+A038: YI SYLLABLE PIT">ꀸ</td>
            <td class="glyph yi" title="U+A056: YI SYLLABLE BBIT">ꁖ</td>
            <td class="glyph yi" title="U+A076: YI SYLLABLE NBIT">ꁶ</td>
            <td class="glyph yi" title="U+A091: YI SYLLABLE HMIT">ꂑ</td>
            <td class="glyph yi" title="U+A0AE: YI SYLLABLE MIT">ꂮ</td>
            <td class="glyph yi" title="U+A0CD: YI SYLLABLE FIT">ꃍ</td>
            <td class="glyph yi" title="U+A0E2: YI SYLLABLE VIT">ꃢ</td>
            <td class="glyph yi" title="U+A100: YI SYLLABLE DIT">ꄀ</td>
            <td class="glyph yi" title="U+A11A: YI SYLLABLE TIT">ꄚ</td>
            <td class="glyph yi" title="U+A136: YI SYLLABLE DDIT">ꄶ</td>
            <td class="glyph yi" title="U+A151: YI SYLLABLE NDIT">ꅑ</td>
            <td class="glyph yi" title="U+A168: YI SYLLABLE HNIT">ꅨ</td>
            <td class="glyph yi" title="U+A17D: YI SYLLABLE NIT">ꅽ</td>
            <td class="glyph yi" title="U+A197: YI SYLLABLE HLIT">ꆗ</td>
            <td class="glyph yi" title="U+A1B7: YI SYLLABLE LIT">ꆷ</td>
            <td class="glyph yi" title="U+A1DA: YI SYLLABLE GIT">ꇚ</td>
            <td class="glyph yi" title="U+A1F8: YI SYLLABLE KIT">ꇸ</td>
            <td class="glyph yi" title="U+A214: YI SYLLABLE GGIT">ꈔ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A246: YI SYLLABLE HXIT">ꉆ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A26E: YI SYLLABLE HIT">ꉮ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A28D: YI SYLLABLE ZIT">ꊍ</td>
            <td class="glyph yi" title="U+A2AE: YI SYLLABLE CIT">ꊮ</td>
            <td class="glyph yi" title="U+A2D0: YI SYLLABLE ZZIT">ꋐ</td>
            <td class="glyph yi" title="U+A2ED: YI SYLLABLE NZIT">ꋭ</td>
            <td class="glyph yi" title="U+A309: YI SYLLABLE SIT">ꌉ</td>
            <td class="glyph yi" title="U+A32A: YI SYLLABLE SSIT">ꌪ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E0: YI SYLLABLE JIT">ꏠ</td>
            <td class="glyph yi" title="U+A3FC: YI SYLLABLE QIT">ꏼ</td>
            <td class="glyph yi" title="U+A418: YI SYLLABLE JJIT">ꐘ</td>
            <td class="glyph yi" title="U+A431: YI SYLLABLE NJIT">ꐱ</td>
            <td class="glyph yi" title="U+A44A: YI SYLLABLE NYIT">ꑊ</td>
            <td class="glyph yi" title="U+A45D: YI SYLLABLE XIT">ꑝ</td>
            <td class="glyph yi" title="U+A471: YI SYLLABLE YIT">ꑱ</td>
        </tr>
        <tr>
            <th class="rowHeader">ix</th>
            <td class="glyph yi" title="U+A001: YI SYLLABLE IX">ꀁ</td>
            <td class="glyph yi" title="U+A017: YI SYLLABLE BIX">ꀗ</td>
            <td class="glyph yi" title="U+A039: YI SYLLABLE PIX">ꀹ</td>
            <td class="glyph yi" title="U+A057: YI SYLLABLE BBIX">ꁗ</td>
            <td class="glyph yi" title="U+A077: YI SYLLABLE NBIX">ꁷ</td>
            <td class="glyph yi" title="U+A092: YI SYLLABLE HMIX">ꂒ</td>
            <td class="glyph yi" title="U+A0AF: YI SYLLABLE MIX">ꂯ</td>
            <td class="glyph yi" title="U+A0CE: YI SYLLABLE FIX">ꃎ</td>
            <td class="glyph yi" title="U+A0E3: YI SYLLABLE VIX">ꃣ</td>
            <td class="glyph yi" title="U+A101: YI SYLLABLE DIX">ꄁ</td>
            <td class="glyph yi" title="U+A11B: YI SYLLABLE TIX">ꄛ</td>
            <td class="glyph yi" title="U+A137: YI SYLLABLE DDIX">ꄷ</td>
            <td class="glyph yi" title="U+A152: YI SYLLABLE NDIX">ꅒ</td>
            <td class="glyph yi" title="U+A169: YI SYLLABLE HNIX">ꅩ</td>
            <td class="glyph yi" title="U+A17E: YI SYLLABLE NIX">ꅾ</td>
            <td class="glyph yi" title="U+A198: YI SYLLABLE HLIX">ꆘ</td>
            <td class="glyph yi" title="U+A1B8: YI SYLLABLE LIX">ꆸ</td>
            <td class="glyph yi" title="U+A1DB: YI SYLLABLE GIX">ꇛ</td>
            <td class="glyph yi" title="U+A1F9: YI SYLLABLE KIX">ꇹ</td>
            <td class="glyph yi" title="U+A215: YI SYLLABLE GGIX">ꈕ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A247: YI SYLLABLE HXIX">ꉇ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A28E: YI SYLLABLE ZIX">ꊎ</td>
            <td class="glyph yi" title="U+A2AF: YI SYLLABLE CIX">ꊯ</td>
            <td class="glyph yi" title="U+A2D1: YI SYLLABLE ZZIX">ꋑ</td>
            <td class="glyph yi" title="U+A2EE: YI SYLLABLE NZIX">ꋮ</td>
            <td class="glyph yi" title="U+A30A: YI SYLLABLE SIX">ꌊ</td>
            <td class="glyph yi" title="U+A32B: YI SYLLABLE SSIX">ꌫ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E1: YI SYLLABLE JIX">ꏡ</td>
            <td class="glyph yi" title="U+A3FD: YI SYLLABLE QIX">ꏽ</td>
            <td class="glyph yi" title="U+A419: YI SYLLABLE JJIX">ꐙ</td>
            <td class="glyph yi" title="U+A432: YI SYLLABLE NJIX">ꐲ</td>
            <td class="glyph yi" title="U+A44B: YI SYLLABLE NYIX">ꑋ</td>
            <td class="glyph yi" title="U+A45E: YI SYLLABLE XIX">ꑞ</td>
            <td class="glyph yi" title="U+A472: YI SYLLABLE YIX">ꑲ</td>
        </tr>
        <tr>
            <th class="rowHeader">i</th>
            <td class="glyph yi" title="U+A002: YI SYLLABLE I">ꀂ</td>
            <td class="glyph yi" title="U+A018: YI SYLLABLE BI">ꀘ</td>
            <td class="glyph yi" title="U+A03A: YI SYLLABLE PI">ꀺ</td>
            <td class="glyph yi" title="U+A058: YI SYLLABLE BBI">ꁘ</td>
            <td class="glyph yi" title="U+A078: YI SYLLABLE NBI">ꁸ</td>
            <td class="glyph yi" title="U+A093: YI SYLLABLE HMI">ꂓ</td>
            <td class="glyph yi" title="U+A0B0: YI SYLLABLE MI">ꂰ</td>
            <td class="glyph yi" title="U+A0CF: YI SYLLABLE FI">ꃏ</td>
            <td class="glyph yi" title="U+A0E4: YI SYLLABLE VI">ꃤ</td>
            <td class="glyph yi" title="U+A102: YI SYLLABLE DI">ꄂ</td>
            <td class="glyph yi" title="U+A11C: YI SYLLABLE TI">ꄜ</td>
            <td class="glyph yi" title="U+A138: YI SYLLABLE DDI">ꄸ</td>
            <td class="glyph yi" title="U+A153: YI SYLLABLE NDI">ꅓ</td>
            <td class="glyph yi" title="U+A16A: YI SYLLABLE HNI">ꅪ</td>
            <td class="glyph yi" title="U+A17F: YI SYLLABLE NI">ꅿ</td>
            <td class="glyph yi" title="U+A199: YI SYLLABLE HLI">ꆙ</td>
            <td class="glyph yi" title="U+A1B9: YI SYLLABLE LI">ꆹ</td>
            <td class="glyph yi" title="U+A1DC: YI SYLLABLE GI">ꇜ</td>
            <td class="glyph yi" title="U+A1FA: YI SYLLABLE KI">ꇺ</td>
            <td class="glyph yi" title="U+A216: YI SYLLABLE GGI">ꈖ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A248: YI SYLLABLE HXI">ꉈ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A28F: YI SYLLABLE ZI">ꊏ</td>
            <td class="glyph yi" title="U+A2B0: YI SYLLABLE CI">ꊰ</td>
            <td class="glyph yi" title="U+A2D2: YI SYLLABLE ZZI">ꋒ</td>
            <td class="glyph yi" title="U+A2EF: YI SYLLABLE NZI">ꋯ</td>
            <td class="glyph yi" title="U+A30B: YI SYLLABLE SI">ꌋ</td>
            <td class="glyph yi" title="U+A32C: YI SYLLABLE SSI">ꌬ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E2: YI SYLLABLE JI">ꏢ</td>
            <td class="glyph yi" title="U+A3FE: YI SYLLABLE QI">ꏾ</td>
            <td class="glyph yi" title="U+A41A: YI SYLLABLE JJI">ꐚ</td>
            <td class="glyph yi" title="U+A433: YI SYLLABLE NJI">ꐳ</td>
            <td class="glyph yi" title="U+A44C: YI SYLLABLE NYI">ꑌ</td>
            <td class="glyph yi" title="U+A45F: YI SYLLABLE XI">ꑟ</td>
            <td class="glyph yi" title="U+A473: YI SYLLABLE YI">ꑳ</td>
        </tr>
        <tr>
            <th class="rowHeader">ip</th>
            <td class="glyph yi" title="U+A003: YI SYLLABLE IP">ꀃ</td>
            <td class="glyph yi" title="U+A019: YI SYLLABLE BIP">ꀙ</td>
            <td class="glyph yi" title="U+A03B: YI SYLLABLE PIP">ꀻ</td>
            <td class="glyph yi" title="U+A059: YI SYLLABLE BBIP">ꁙ</td>
            <td class="glyph yi" title="U+A079: YI SYLLABLE NBIP">ꁹ</td>
            <td class="glyph yi" title="U+A094: YI SYLLABLE HMIP">ꂔ</td>
            <td class="glyph yi" title="U+A0B1: YI SYLLABLE MIP">ꂱ</td>
            <td class="glyph yi" title="U+A0D0: YI SYLLABLE FIP">ꃐ</td>
            <td class="glyph yi" title="U+A0E5: YI SYLLABLE VIP">ꃥ</td>
            <td class="glyph yi" title="U+A103: YI SYLLABLE DIP">ꄃ</td>
            <td class="glyph yi" title="U+A11D: YI SYLLABLE TIP">ꄝ</td>
            <td class="glyph yi" title="U+A139: YI SYLLABLE DDIP">ꄹ</td>
            <td class="glyph yi" title="U+A154: YI SYLLABLE NDIP">ꅔ</td>
            <td class="glyph yi" title="U+A16B: YI SYLLABLE HNIP">ꅫ</td>
            <td class="glyph yi" title="U+A180: YI SYLLABLE NIP">ꆀ</td>
            <td class="glyph yi" title="U+A19A: YI SYLLABLE HLIP">ꆚ</td>
            <td class="glyph yi" title="U+A1BA: YI SYLLABLE LIP">ꆺ</td>
            <td class="glyph yi" title="U+A1DD: YI SYLLABLE GIP">ꇝ</td>
            <td class="glyph yi" title="U+A1FB: YI SYLLABLE KIP">ꇻ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A249: YI SYLLABLE HXIP">ꉉ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A290: YI SYLLABLE ZIP">ꊐ</td>
            <td class="glyph yi" title="U+A2B1: YI SYLLABLE CIP">ꊱ</td>
            <td class="glyph yi" title="U+A2D3: YI SYLLABLE ZZIP">ꋓ</td>
            <td class="glyph yi" title="U+A2F0: YI SYLLABLE NZIP">ꋰ</td>
            <td class="glyph yi" title="U+A30C: YI SYLLABLE SIP">ꌌ</td>
            <td class="glyph yi" title="U+A32D: YI SYLLABLE SSIP">ꌭ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E3: YI SYLLABLE JIP">ꏣ</td>
            <td class="glyph yi" title="U+A3FF: YI SYLLABLE QIP">ꏿ</td>
            <td class="glyph yi" title="U+A41B: YI SYLLABLE JJIP">ꐛ</td>
            <td class="glyph yi" title="U+A434: YI SYLLABLE NJIP">ꐴ</td>
            <td class="glyph yi" title="U+A44D: YI SYLLABLE NYIP">ꑍ</td>
            <td class="glyph yi" title="U+A460: YI SYLLABLE XIP">ꑠ</td>
            <td class="glyph yi" title="U+A474: YI SYLLABLE YIP">ꑴ</td>
        </tr>
        <tr>
            <th class="rowHeader">iet</th>
            <td class="glyph yi" title="U+A004: YI SYLLABLE IET">ꀄ</td>
            <td class="glyph yi" title="U+A01A: YI SYLLABLE BIET">ꀚ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A05A: YI SYLLABLE BBIET">ꁚ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E6: YI SYLLABLE VIET">ꃦ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A16C: YI SYLLABLE HNIET">ꅬ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1BB: YI SYLLABLE LIET">ꆻ</td>
            <td class="glyph yi" title="U+A1DE: YI SYLLABLE GIET">ꇞ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A24A: YI SYLLABLE HXIET">ꉊ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2B2: YI SYLLABLE CIET">ꊲ</td>
            <td class="glyph yi" title="U+A2D4: YI SYLLABLE ZZIET">ꋔ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E4: YI SYLLABLE JIET">ꏤ</td>
            <td class="glyph yi" title="U+A400: YI SYLLABLE QIET">ꐀ</td>
            <td class="glyph yi" title="U+A41C: YI SYLLABLE JJIET">ꐜ</td>
            <td class="glyph yi" title="U+A435: YI SYLLABLE NJIET">ꐵ</td>
            <td class="glyph yi" title="U+A44E: YI SYLLABLE NYIET">ꑎ</td>
            <td class="glyph yi" title="U+A461: YI SYLLABLE XIET">ꑡ</td>
            <td class="glyph yi" title="U+A475: YI SYLLABLE YIET">ꑵ</td>
        </tr>
        <tr>
            <th class="rowHeader">iex</th>
            <td class="glyph yi" title="U+A005: YI SYLLABLE IEX">ꀅ</td>
            <td class="glyph yi" title="U+A01B: YI SYLLABLE BIEX">ꀛ</td>
            <td class="glyph yi" title="U+A03C: YI SYLLABLE PIEX">ꀼ</td>
            <td class="glyph yi" title="U+A05B: YI SYLLABLE BBIEX">ꁛ</td>
            <td class="glyph yi" title="U+A07A: YI SYLLABLE NBIEX">ꁺ</td>
            <td class="glyph yi" title="U+A095: YI SYLLABLE HMIEX">ꂕ</td>
            <td class="glyph yi" title="U+A0B2: YI SYLLABLE MIEX">ꂲ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E7: YI SYLLABLE VIEX">ꃧ</td>
            <td class="glyph yi" title="U+A104: YI SYLLABLE DIEX">ꄄ</td>
            <td class="glyph yi" title="U+A11E: YI SYLLABLE TIEX">ꄞ</td>
            <td class="glyph yi" title="U+A13A: YI SYLLABLE DDIEX">ꄺ</td>
            <td class="glyph yi" title="U+A155: YI SYLLABLE NDIEX">ꅕ</td>
            <td class="glyph yi" title="U+A16D: YI SYLLABLE HNIEX">ꅭ</td>
            <td class="glyph yi" title="U+A181: YI SYLLABLE NIEX">ꆁ</td>
            <td class="glyph yi" title="U+A19B: YI SYLLABLE HLIEX">ꆛ</td>
            <td class="glyph yi" title="U+A1BC: YI SYLLABLE LIEX">ꆼ</td>
            <td class="glyph yi" title="U+A1DF: YI SYLLABLE GIEX">ꇟ</td>
            <td class="glyph yi" title="U+A1FC: YI SYLLABLE KIEX">ꇼ</td>
            <td class="glyph yi" title="U+A217: YI SYLLABLE GGIEX">ꈗ</td>
            <td class="glyph yi" title="U+A230: YI SYLLABLE MGIEX">ꈰ</td>
            <td class="glyph yi" title="U+A24B: YI SYLLABLE HXIEX">ꉋ</td>
            <td class="glyph yi" title="U+A25D: YI SYLLABLE NGIEX">ꉝ</td>
            <td class="glyph yi" title="U+A26F: YI SYLLABLE HIEX">ꉯ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A291: YI SYLLABLE ZIEX">ꊑ</td>
            <td class="glyph yi" title="U+A2B3: YI SYLLABLE CIEX">ꊳ</td>
            <td class="glyph yi" title="U+A2D5: YI SYLLABLE ZZIEX">ꋕ</td>
            <td class="glyph yi" title="U+A2F1: YI SYLLABLE NZIEX">ꋱ</td>
            <td class="glyph yi" title="U+A30D: YI SYLLABLE SIEX">ꌍ</td>
            <td class="glyph yi" title="U+A32E: YI SYLLABLE SSIEX">ꌮ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E5: YI SYLLABLE JIEX">ꏥ</td>
            <td class="glyph yi" title="U+A401: YI SYLLABLE QIEX">ꐁ</td>
            <td class="glyph yi" title="U+A41D: YI SYLLABLE JJIEX">ꐝ</td>
            <td class="glyph yi" title="U+A436: YI SYLLABLE NJIEX">ꐶ</td>
            <td class="glyph yi" title="U+A44F: YI SYLLABLE NYIEX">ꑏ</td>
            <td class="glyph yi" title="U+A462: YI SYLLABLE XIEX">ꑢ</td>
            <td class="glyph yi" title="U+A476: YI SYLLABLE YIEX">ꑶ</td>
        </tr>
        <tr>
            <th class="rowHeader">ie</th>
            <td class="glyph yi" title="U+A006: YI SYLLABLE IE">ꀆ</td>
            <td class="glyph yi" title="U+A01C: YI SYLLABLE BIE">ꀜ</td>
            <td class="glyph yi" title="U+A03D: YI SYLLABLE PIE">ꀽ</td>
            <td class="glyph yi" title="U+A05C: YI SYLLABLE BBIE">ꁜ</td>
            <td class="glyph yi" title="U+A07B: YI SYLLABLE NBIE">ꁻ</td>
            <td class="glyph yi" title="U+A096: YI SYLLABLE HMIE">ꂖ</td>
            <td class="glyph yi" title="U+A0B3: YI SYLLABLE MIE">ꂳ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E8: YI SYLLABLE VIE">ꃨ</td>
            <td class="glyph yi" title="U+A105: YI SYLLABLE DIE">ꄅ</td>
            <td class="glyph yi" title="U+A11F: YI SYLLABLE TIE">ꄟ</td>
            <td class="glyph yi" title="U+A13B: YI SYLLABLE DDIE">ꄻ</td>
            <td class="glyph yi" title="U+A156: YI SYLLABLE NDIE">ꅖ</td>
            <td class="glyph yi" title="U+A16E: YI SYLLABLE HNIE">ꅮ</td>
            <td class="glyph yi" title="U+A182: YI SYLLABLE NIE">ꆂ</td>
            <td class="glyph yi" title="U+A19C: YI SYLLABLE HLIE">ꆜ</td>
            <td class="glyph yi" title="U+A1BD: YI SYLLABLE LIE">ꆽ</td>
            <td class="glyph yi" title="U+A1E0: YI SYLLABLE GIE">ꇠ</td>
            <td class="glyph yi" title="U+A1FD: YI SYLLABLE KIE">ꇽ</td>
            <td class="glyph yi" title="U+A218: YI SYLLABLE GGIE">ꈘ</td>
            <td class="glyph yi" title="U+A231: YI SYLLABLE MGIE">ꈱ</td>
            <td class="glyph yi" title="U+A24C: YI SYLLABLE HXIE">ꉌ</td>
            <td class="glyph yi" title="U+A25E: YI SYLLABLE NGIE">ꉞ</td>
            <td class="glyph yi" title="U+A270: YI SYLLABLE HIE">ꉰ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A292: YI SYLLABLE ZIE">ꊒ</td>
            <td class="glyph yi" title="U+A2B4: YI SYLLABLE CIE">ꊴ</td>
            <td class="glyph yi" title="U+A2D6: YI SYLLABLE ZZIE">ꋖ</td>
            <td class="glyph yi" title="U+A2F2: YI SYLLABLE NZIE">ꋲ</td>
            <td class="glyph yi" title="U+A30E: YI SYLLABLE SIE">ꌎ</td>
            <td class="glyph yi" title="U+A32F: YI SYLLABLE SSIE">ꌯ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E6: YI SYLLABLE JIE">ꏦ</td>
            <td class="glyph yi" title="U+A402: YI SYLLABLE QIE">ꐂ</td>
            <td class="glyph yi" title="U+A41E: YI SYLLABLE JJIE">ꐞ</td>
            <td class="glyph yi" title="U+A437: YI SYLLABLE NJIE">ꐷ</td>
            <td class="glyph yi" title="U+A450: YI SYLLABLE NYIE">ꑐ</td>
            <td class="glyph yi" title="U+A463: YI SYLLABLE XIE">ꑣ</td>
            <td class="glyph yi" title="U+A477: YI SYLLABLE YIE">ꑷ</td>
        </tr>
        <tr>
            <th class="rowHeader">iep</th>
            <td class="glyph yi" title="U+A007: YI SYLLABLE IEP">ꀇ</td>
            <td class="glyph yi" title="U+A01D: YI SYLLABLE BIEP">ꀝ</td>
            <td class="glyph yi" title="U+A03E: YI SYLLABLE PIEP">ꀾ</td>
            <td class="glyph yi" title="U+A05D: YI SYLLABLE BBIEP">ꁝ</td>
            <td class="glyph yi" title="U+A07C: YI SYLLABLE NBIEP">ꁼ</td>
            <td class="glyph yi" title="U+A097: YI SYLLABLE HMIEP">ꂗ</td>
            <td class="glyph yi" title="U+A0B4: YI SYLLABLE MIEP">ꂴ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E9: YI SYLLABLE VIEP">ꃩ</td>
            <td class="glyph yi" title="U+A106: YI SYLLABLE DIEP">ꄆ</td>
            <td class="glyph yi" title="U+A120: YI SYLLABLE TIEP">ꄠ</td>
            <td class="glyph yi" title="U+A13C: YI SYLLABLE DDIEP">ꄼ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A16F: YI SYLLABLE HNIEP">ꅯ</td>
            <td class="glyph yi" title="U+A183: YI SYLLABLE NIEP">ꆃ</td>
            <td class="glyph yi" title="U+A19D: YI SYLLABLE HLIEP">ꆝ</td>
            <td class="glyph yi" title="U+A1BE: YI SYLLABLE LIEP">ꆾ</td>
            <td class="glyph yi" title="U+A1E1: YI SYLLABLE GIEP">ꇡ</td>
            <td class="glyph yi" title="U+A1FE: YI SYLLABLE KIEP">ꇾ</td>
            <td class="glyph yi" title="U+A219: YI SYLLABLE GGIEP">ꈙ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A24D: YI SYLLABLE HXIEP">ꉍ</td>
            <td class="glyph yi" title="U+A25F: YI SYLLABLE NGIEP">ꉟ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A293: YI SYLLABLE ZIEP">ꊓ</td>
            <td class="glyph yi" title="U+A2B5: YI SYLLABLE CIEP">ꊵ</td>
            <td class="glyph yi" title="U+A2D7: YI SYLLABLE ZZIEP">ꋗ</td>
            <td class="glyph yi" title="U+A2F3: YI SYLLABLE NZIEP">ꋳ</td>
            <td class="glyph yi" title="U+A30F: YI SYLLABLE SIEP">ꌏ</td>
            <td class="glyph yi" title="U+A330: YI SYLLABLE SSIEP">ꌰ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E7: YI SYLLABLE JIEP">ꏧ</td>
            <td class="glyph yi" title="U+A403: YI SYLLABLE QIEP">ꐃ</td>
            <td class="glyph yi" title="U+A41F: YI SYLLABLE JJIEP">ꐟ</td>
            <td class="glyph yi" title="U+A438: YI SYLLABLE NJIEP">ꐸ</td>
            <td class="glyph yi" title="U+A451: YI SYLLABLE NYIEP">ꑑ</td>
            <td class="glyph yi" title="U+A464: YI SYLLABLE XIEP">ꑤ</td>
            <td class="glyph yi" title="U+A478: YI SYLLABLE YIEP">ꑸ</td>
        </tr>
        <tr>
            <th class="rowHeader">at</th>
            <td class="glyph yi" title="U+A008: YI SYLLABLE AT">ꀈ</td>
            <td class="glyph yi" title="U+A01E: YI SYLLABLE BAT">ꀞ</td>
            <td class="glyph yi" title="U+A03F: YI SYLLABLE PAT">ꀿ</td>
            <td class="glyph yi" title="U+A05E: YI SYLLABLE BBAT">ꁞ</td>
            <td class="glyph yi" title="U+A07D: YI SYLLABLE NBAT">ꁽ</td>
            <td class="glyph yi" title="U+A098: YI SYLLABLE HMAT">ꂘ</td>
            <td class="glyph yi" title="U+A0B5: YI SYLLABLE MAT">ꂵ</td>
            <td class="glyph yi" title="U+A0D1: YI SYLLABLE FAT">ꃑ</td>
            <td class="glyph yi" title="U+A0EA: YI SYLLABLE VAT">ꃪ</td>
            <td class="glyph yi" title="U+A107: YI SYLLABLE DAT">ꄇ</td>
            <td class="glyph yi" title="U+A121: YI SYLLABLE TAT">ꄡ</td>
            <td class="glyph yi" title="U+A13D: YI SYLLABLE DDAT">ꄽ</td>
            <td class="glyph yi" title="U+A157: YI SYLLABLE NDAT">ꅗ</td>
            <td class="glyph yi" title="U+A170: YI SYLLABLE HNAT">ꅰ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A19E: YI SYLLABLE HLAT">ꆞ</td>
            <td class="glyph yi" title="U+A1BF: YI SYLLABLE LAT">ꆿ</td>
            <td class="glyph yi" title="U+A1E2: YI SYLLABLE GAT">ꇢ</td>
            <td class="glyph yi" title="U+A1FF: YI SYLLABLE KAT">ꇿ</td>
            <td class="glyph yi" title="U+A21A: YI SYLLABLE GGAT">ꈚ</td>
            <td class="glyph yi" title="U+A232: YI SYLLABLE MGAT">ꈲ</td>
            <td class="glyph yi" title="U+A24E: YI SYLLABLE HXAT">ꉎ</td>
            <td class="glyph yi" title="U+A260: YI SYLLABLE NGAT">ꉠ</td>
            <td class="glyph yi" title="U+A271: YI SYLLABLE HAT">ꉱ</td>
            <td class="glyph yi" title="U+A280: YI SYLLABLE WAT">ꊀ</td>
            <td class="glyph yi" title="U+A294: YI SYLLABLE ZAT">ꊔ</td>
            <td class="glyph yi" title="U+A2B6: YI SYLLABLE CAT">ꊶ</td>
            <td class="glyph yi" title="U+A2D8: YI SYLLABLE ZZAT">ꋘ</td>
            <td class="glyph yi" title="U+A2F4: YI SYLLABLE NZAT">ꋴ</td>
            <td class="glyph yi" title="U+A310: YI SYLLABLE SAT">ꌐ</td>
            <td class="glyph yi" title="U+A331: YI SYLLABLE SSAT">ꌱ</td>
            <td class="glyph yi" title="U+A346: YI SYLLABLE ZHAT">ꍆ</td>
            <td class="glyph yi" title="U+A361: YI SYLLABLE CHAT">ꍡ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A394: YI SYLLABLE NRAT">ꎔ</td>
            <td class="glyph yi" title="U+A3AB: YI SYLLABLE SHAT">ꎫ</td>
            <td class="glyph yi" title="U+A3C6: YI SYLLABLE RAT">ꏆ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ax</th>
            <td class="glyph yi" title="U+A009: YI SYLLABLE AX">ꀉ</td>
            <td class="glyph yi" title="U+A01F: YI SYLLABLE BAX">ꀟ</td>
            <td class="glyph yi" title="U+A040: YI SYLLABLE PAX">ꁀ</td>
            <td class="glyph yi" title="U+A05F: YI SYLLABLE BBAX">ꁟ</td>
            <td class="glyph yi" title="U+A07E: YI SYLLABLE NBAX">ꁾ</td>
            <td class="glyph yi" title="U+A099: YI SYLLABLE HMAX">ꂙ</td>
            <td class="glyph yi" title="U+A0B6: YI SYLLABLE MAX">ꂶ</td>
            <td class="glyph yi" title="U+A0D2: YI SYLLABLE FAX">ꃒ</td>
            <td class="glyph yi" title="U+A0EB: YI SYLLABLE VAX">ꃫ</td>
            <td class="glyph yi" title="U+A108: YI SYLLABLE DAX">ꄈ</td>
            <td class="glyph yi" title="U+A122: YI SYLLABLE TAX">ꄢ</td>
            <td class="glyph yi" title="U+A13E: YI SYLLABLE DDAX">ꄾ</td>
            <td class="glyph yi" title="U+A158: YI SYLLABLE NDAX">ꅘ</td>
            <td class="glyph yi" title="U+A171: YI SYLLABLE HNAX">ꅱ</td>
            <td class="glyph yi" title="U+A184: YI SYLLABLE NAX">ꆄ</td>
            <td class="glyph yi" title="U+A19F: YI SYLLABLE HLAX">ꆟ</td>
            <td class="glyph yi" title="U+A1C0: YI SYLLABLE LAX">ꇀ</td>
            <td class="glyph yi" title="U+A1E3: YI SYLLABLE GAX">ꇣ</td>
            <td class="glyph yi" title="U+A200: YI SYLLABLE KAX">ꈀ</td>
            <td class="glyph yi" title="U+A21B: YI SYLLABLE GGAX">ꈛ</td>
            <td class="glyph yi" title="U+A233: YI SYLLABLE MGAX">ꈳ</td>
            <td class="glyph yi" title="U+A24F: YI SYLLABLE HXAX">ꉏ</td>
            <td class="glyph yi" title="U+A261: YI SYLLABLE NGAX">ꉡ</td>
            <td class="glyph yi" title="U+A272: YI SYLLABLE HAX">ꉲ</td>
            <td class="glyph yi" title="U+A281: YI SYLLABLE WAX">ꊁ</td>
            <td class="glyph yi" title="U+A295: YI SYLLABLE ZAX">ꊕ</td>
            <td class="glyph yi" title="U+A2B7: YI SYLLABLE CAX">ꊷ</td>
            <td class="glyph yi" title="U+A2D9: YI SYLLABLE ZZAX">ꋙ</td>
            <td class="glyph yi" title="U+A2F5: YI SYLLABLE NZAX">ꋵ</td>
            <td class="glyph yi" title="U+A311: YI SYLLABLE SAX">ꌑ</td>
            <td class="glyph yi" title="U+A332: YI SYLLABLE SSAX">ꌲ</td>
            <td class="glyph yi" title="U+A347: YI SYLLABLE ZHAX">ꍇ</td>
            <td class="glyph yi" title="U+A362: YI SYLLABLE CHAX">ꍢ</td>
            <td class="glyph yi" title="U+A37C: YI SYLLABLE RRAX">ꍼ</td>
            <td class="glyph yi" title="U+A395: YI SYLLABLE NRAX">ꎕ</td>
            <td class="glyph yi" title="U+A3AC: YI SYLLABLE SHAX">ꎬ</td>
            <td class="glyph yi" title="U+A3C7: YI SYLLABLE RAX">ꏇ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">a</th>
            <td class="glyph yi" title="U+A00A: YI SYLLABLE A">ꀊ</td>
            <td class="glyph yi" title="U+A020: YI SYLLABLE BA">ꀠ</td>
            <td class="glyph yi" title="U+A041: YI SYLLABLE PA">ꁁ</td>
            <td class="glyph yi" title="U+A060: YI SYLLABLE BBA">ꁠ</td>
            <td class="glyph yi" title="U+A07F: YI SYLLABLE NBA">ꁿ</td>
            <td class="glyph yi" title="U+A09A: YI SYLLABLE HMA">ꂚ</td>
            <td class="glyph yi" title="U+A0B7: YI SYLLABLE MA">ꂷ</td>
            <td class="glyph yi" title="U+A0D3: YI SYLLABLE FA">ꃓ</td>
            <td class="glyph yi" title="U+A0EC: YI SYLLABLE VA">ꃬ</td>
            <td class="glyph yi" title="U+A109: YI SYLLABLE DA">ꄉ</td>
            <td class="glyph yi" title="U+A123: YI SYLLABLE TA">ꄣ</td>
            <td class="glyph yi" title="U+A13F: YI SYLLABLE DDA">ꄿ</td>
            <td class="glyph yi" title="U+A159: YI SYLLABLE NDA">ꅙ</td>
            <td class="glyph yi" title="U+A172: YI SYLLABLE HNA">ꅲ</td>
            <td class="glyph yi" title="U+A185: YI SYLLABLE NA">ꆅ</td>
            <td class="glyph yi" title="U+A1A0: YI SYLLABLE HLA">ꆠ</td>
            <td class="glyph yi" title="U+A1C1: YI SYLLABLE LA">ꇁ</td>
            <td class="glyph yi" title="U+A1E4: YI SYLLABLE GA">ꇤ</td>
            <td class="glyph yi" title="U+A201: YI SYLLABLE KA">ꈁ</td>
            <td class="glyph yi" title="U+A21C: YI SYLLABLE GGA">ꈜ</td>
            <td class="glyph yi" title="U+A234: YI SYLLABLE MGA">ꈴ</td>
            <td class="glyph yi" title="U+A250: YI SYLLABLE HXA">ꉐ</td>
            <td class="glyph yi" title="U+A262: YI SYLLABLE NGA">ꉢ</td>
            <td class="glyph yi" title="U+A273: YI SYLLABLE HA">ꉳ</td>
            <td class="glyph yi" title="U+A282: YI SYLLABLE WA">ꊂ</td>
            <td class="glyph yi" title="U+A296: YI SYLLABLE ZA">ꊖ</td>
            <td class="glyph yi" title="U+A2B8: YI SYLLABLE CA">ꊸ</td>
            <td class="glyph yi" title="U+A2DA: YI SYLLABLE ZZA">ꋚ</td>
            <td class="glyph yi" title="U+A2F6: YI SYLLABLE NZA">ꋶ</td>
            <td class="glyph yi" title="U+A312: YI SYLLABLE SA">ꌒ</td>
            <td class="glyph yi" title="U+A333: YI SYLLABLE SSA">ꌳ</td>
            <td class="glyph yi" title="U+A348: YI SYLLABLE ZHA">ꍈ</td>
            <td class="glyph yi" title="U+A363: YI SYLLABLE CHA">ꍣ</td>
            <td class="glyph yi" title="U+A37D: YI SYLLABLE RRA">ꍽ</td>
            <td class="glyph yi" title="U+A396: YI SYLLABLE NRA">ꎖ</td>
            <td class="glyph yi" title="U+A3AD: YI SYLLABLE SHA">ꎭ</td>
            <td class="glyph yi" title="U+A3C8: YI SYLLABLE RA">ꏈ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ap</th>
            <td class="glyph yi" title="U+A00B: YI SYLLABLE AP">ꀋ</td>
            <td class="glyph yi" title="U+A021: YI SYLLABLE BAP">ꀡ</td>
            <td class="glyph yi" title="U+A042: YI SYLLABLE PAP">ꁂ</td>
            <td class="glyph yi" title="U+A061: YI SYLLABLE BBAP">ꁡ</td>
            <td class="glyph yi" title="U+A080: YI SYLLABLE NBAP">ꂀ</td>
            <td class="glyph yi" title="U+A09B: YI SYLLABLE HMAP">ꂛ</td>
            <td class="glyph yi" title="U+A0B8: YI SYLLABLE MAP">ꂸ</td>
            <td class="glyph yi" title="U+A0D4: YI SYLLABLE FAP">ꃔ</td>
            <td class="glyph yi" title="U+A0ED: YI SYLLABLE VAP">ꃭ</td>
            <td class="glyph yi" title="U+A10A: YI SYLLABLE DAP">ꄊ</td>
            <td class="glyph yi" title="U+A124: YI SYLLABLE TAP">ꄤ</td>
            <td class="glyph yi" title="U+A140: YI SYLLABLE DDAP">ꅀ</td>
            <td class="glyph yi" title="U+A15A: YI SYLLABLE NDAP">ꅚ</td>
            <td class="glyph yi" title="U+A173: YI SYLLABLE HNAP">ꅳ</td>
            <td class="glyph yi" title="U+A186: YI SYLLABLE NAP">ꆆ</td>
            <td class="glyph yi" title="U+A1A1: YI SYLLABLE HLAP">ꆡ</td>
            <td class="glyph yi" title="U+A1C2: YI SYLLABLE LAP">ꇂ</td>
            <td class="glyph yi" title="U+A1E5: YI SYLLABLE GAP">ꇥ</td>
            <td class="glyph yi" title="U+A202: YI SYLLABLE KAP">ꈂ</td>
            <td class="glyph yi" title="U+A21D: YI SYLLABLE GGAP">ꈝ</td>
            <td class="glyph yi" title="U+A235: YI SYLLABLE MGAP">ꈵ</td>
            <td class="glyph yi" title="U+A251: YI SYLLABLE HXAP">ꉑ</td>
            <td class="glyph yi" title="U+A263: YI SYLLABLE NGAP">ꉣ</td>
            <td class="glyph yi" title="U+A274: YI SYLLABLE HAP">ꉴ</td>
            <td class="glyph yi" title="U+A283: YI SYLLABLE WAP">ꊃ</td>
            <td class="glyph yi" title="U+A297: YI SYLLABLE ZAP">ꊗ</td>
            <td class="glyph yi" title="U+A2B9: YI SYLLABLE CAP">ꊹ</td>
            <td class="glyph yi" title="U+A2DB: YI SYLLABLE ZZAP">ꋛ</td>
            <td class="glyph yi" title="U+A2F7: YI SYLLABLE NZAP">ꋷ</td>
            <td class="glyph yi" title="U+A313: YI SYLLABLE SAP">ꌓ</td>
            <td class="glyph yi" title="U+A334: YI SYLLABLE SSAP">ꌴ</td>
            <td class="glyph yi" title="U+A349: YI SYLLABLE ZHAP">ꍉ</td>
            <td class="glyph yi" title="U+A364: YI SYLLABLE CHAP">ꍤ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A397: YI SYLLABLE NRAP">ꎗ</td>
            <td class="glyph yi" title="U+A3AE: YI SYLLABLE SHAP">ꎮ</td>
            <td class="glyph yi" title="U+A3C9: YI SYLLABLE RAP">ꏉ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">uot</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0B9: YI SYLLABLE MUOT">ꂹ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A125: YI SYLLABLE TUOT">ꄥ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1C3: YI SYLLABLE LUOT">ꇃ</td>
            <td class="glyph yi" title="U+A1E6: YI SYLLABLE GUOT">ꇦ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A21E: YI SYLLABLE GGUOT">ꈞ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A252: YI SYLLABLE HXUOT">ꉒ</td>
            <td class="glyph yi" title="U+A264: YI SYLLABLE NGUOT">ꉤ</td>
            <td class="glyph yi" title="U+A275: YI SYLLABLE HUOT">ꉵ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A365: YI SYLLABLE CHUOT">ꍥ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E8: YI SYLLABLE JUOT">ꏨ</td>
            <td class="glyph yi" title="U+A404: YI SYLLABLE QUOT">ꐄ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A479: YI SYLLABLE YUOT">ꑹ</td>
        </tr>
        <tr>
            <th class="rowHeader">uox</th>
            <td class="glyph yi" title="U+A00C: YI SYLLABLE UOX">ꀌ</td>
            <td class="glyph yi" title="U+A022: YI SYLLABLE BUOX">ꀢ</td>
            <td class="glyph yi" title="U+A043: YI SYLLABLE PUOX">ꁃ</td>
            <td class="glyph yi" title="U+A062: YI SYLLABLE BBUOX">ꁢ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A09C: YI SYLLABLE HMUOX">ꂜ</td>
            <td class="glyph yi" title="U+A0BA: YI SYLLABLE MUOX">ꂺ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A10B: YI SYLLABLE DUOX">ꄋ</td>
            <td class="glyph yi" title="U+A126: YI SYLLABLE TUOX">ꄦ</td>
            <td class="glyph yi" title="U+A141: YI SYLLABLE DDUOX">ꅁ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A174: YI SYLLABLE HNUOX">ꅴ</td>
            <td class="glyph yi" title="U+A187: YI SYLLABLE NUOX">ꆇ</td>
            <td class="glyph yi" title="U+A1A2: YI SYLLABLE HLUOX">ꆢ</td>
            <td class="glyph yi" title="U+A1C4: YI SYLLABLE LUOX">ꇄ</td>
            <td class="glyph yi" title="U+A1E7: YI SYLLABLE GUOX">ꇧ</td>
            <td class="glyph yi" title="U+A203: YI SYLLABLE KUOX">ꈃ</td>
            <td class="glyph yi" title="U+A21F: YI SYLLABLE GGUOX">ꈟ</td>
            <td class="glyph yi" title="U+A236: YI SYLLABLE MGUOX">ꈶ</td>
            <td class="glyph yi" title="U+A253: YI SYLLABLE HXUOX">ꉓ</td>
            <td class="glyph yi" title="U+A265: YI SYLLABLE NGUOX">ꉥ</td>
            <td class="glyph yi" title="U+A276: YI SYLLABLE HUOX">ꉶ</td>
            <td class="glyph yi" title="U+A284: YI SYLLABLE WUOX">ꊄ</td>
            <td class="glyph yi" title="U+A298: YI SYLLABLE ZUOX">ꊘ</td>
            <td class="glyph yi" title="U+A2BA: YI SYLLABLE CUOX">ꊺ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2F8: YI SYLLABLE NZUOX">ꋸ</td>
            <td class="glyph yi" title="U+A314: YI SYLLABLE SUOX">ꌔ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A34A: YI SYLLABLE ZHUOX">ꍊ</td>
            <td class="glyph yi" title="U+A366: YI SYLLABLE CHUOX">ꍦ</td>
            <td class="glyph yi" title="U+A37E: YI SYLLABLE RRUOX">ꍾ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3AF: YI SYLLABLE SHUOX">ꎯ</td>
            <td class="glyph yi" title="U+A3CA: YI SYLLABLE RUOX">ꏊ</td>
            <td class="glyph yi" title="U+A3E9: YI SYLLABLE JUOX">ꏩ</td>
            <td class="glyph yi" title="U+A405: YI SYLLABLE QUOX">ꐅ</td>
            <td class="glyph yi" title="U+A420: YI SYLLABLE JJUOX">ꐠ</td>
            <td class="glyph yi" title="U+A439: YI SYLLABLE NJUOX">ꐹ</td>
            <td class="glyph yi" title="U+A452: YI SYLLABLE NYUOX">ꑒ</td>
            <td class="glyph yi" title="U+A465: YI SYLLABLE XUOX">ꑥ</td>
            <td class="glyph yi" title="U+A47A: YI SYLLABLE YUOX">ꑺ</td>
        </tr>
        <tr>
            <th class="rowHeader">uo</th>
            <td class="glyph yi" title="U+A00D: YI SYLLABLE UO">ꀍ</td>
            <td class="glyph yi" title="U+A023: YI SYLLABLE BUO">ꀣ</td>
            <td class="glyph yi" title="U+A044: YI SYLLABLE PUO">ꁄ</td>
            <td class="glyph yi" title="U+A063: YI SYLLABLE BBUO">ꁣ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A09D: YI SYLLABLE HMUO">ꂝ</td>
            <td class="glyph yi" title="U+A0BB: YI SYLLABLE MUO">ꂻ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A10C: YI SYLLABLE DUO">ꄌ</td>
            <td class="glyph yi" title="U+A127: YI SYLLABLE TUO">ꄧ</td>
            <td class="glyph yi" title="U+A142: YI SYLLABLE DDUO">ꅂ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A175: YI SYLLABLE HNUO">ꅵ</td>
            <td class="glyph yi" title="U+A188: YI SYLLABLE NUO">ꆈ</td>
            <td class="glyph yi" title="U+A1A3: YI SYLLABLE HLUO">ꆣ</td>
            <td class="glyph yi" title="U+A1C5: YI SYLLABLE LUO">ꇅ</td>
            <td class="glyph yi" title="U+A1E8: YI SYLLABLE GUO">ꇨ</td>
            <td class="glyph yi" title="U+A204: YI SYLLABLE KUO">ꈄ</td>
            <td class="glyph yi" title="U+A220: YI SYLLABLE GGUO">ꈠ</td>
            <td class="glyph yi" title="U+A237: YI SYLLABLE MGUO">ꈷ</td>
            <td class="glyph yi" title="U+A254: YI SYLLABLE HXUO">ꉔ</td>
            <td class="glyph yi" title="U+A266: YI SYLLABLE NGUO">ꉦ</td>
            <td class="glyph yi" title="U+A277: YI SYLLABLE HUO">ꉷ</td>
            <td class="glyph yi" title="U+A285: YI SYLLABLE WUO">ꊅ</td>
            <td class="glyph yi" title="U+A299: YI SYLLABLE ZUO">ꊙ</td>
            <td class="glyph yi" title="U+A2BB: YI SYLLABLE CUO">ꊻ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2F9: YI SYLLABLE NZUO">ꋹ</td>
            <td class="glyph yi" title="U+A315: YI SYLLABLE SUO">ꌕ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A34B: YI SYLLABLE ZHUO">ꍋ</td>
            <td class="glyph yi" title="U+A367: YI SYLLABLE CHUO">ꍧ</td>
            <td class="glyph yi" title="U+A37F: YI SYLLABLE RRUO">ꍿ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3B0: YI SYLLABLE SHUO">ꎰ</td>
            <td class="glyph yi" title="U+A3CB: YI SYLLABLE RUO">ꏋ</td>
            <td class="glyph yi" title="U+A3EA: YI SYLLABLE JUO">ꏪ</td>
            <td class="glyph yi" title="U+A406: YI SYLLABLE QUO">ꐆ</td>
            <td class="glyph yi" title="U+A421: YI SYLLABLE JJUO">ꐡ</td>
            <td class="glyph yi" title="U+A43A: YI SYLLABLE NJUO">ꐺ</td>
            <td class="glyph yi" title="U+A453: YI SYLLABLE NYUO">ꑓ</td>
            <td class="glyph yi" title="U+A466: YI SYLLABLE XUO">ꑦ</td>
            <td class="glyph yi" title="U+A47B: YI SYLLABLE YUO">ꑻ</td>
        </tr>
        <tr>
            <th class="rowHeader">uop</th>
            <td class="glyph yi" title="U+A00E: YI SYLLABLE UOP">ꀎ</td>
            <td class="glyph yi" title="U+A024: YI SYLLABLE BUOP">ꀤ</td>
            <td class="glyph yi" title="U+A045: YI SYLLABLE PUOP">ꁅ</td>
            <td class="glyph yi" title="U+A064: YI SYLLABLE BBUOP">ꁤ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A09E: YI SYLLABLE HMUOP">ꂞ</td>
            <td class="glyph yi" title="U+A0BC: YI SYLLABLE MUOP">ꂼ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A128: YI SYLLABLE TUOP">ꄨ</td>
            <td class="glyph yi" title="U+A143: YI SYLLABLE DDUOP">ꅃ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A189: YI SYLLABLE NUOP">ꆉ</td>
            <td class="glyph yi" title="U+A1A4: YI SYLLABLE HLUOP">ꆤ</td>
            <td class="glyph yi" title="U+A1C6: YI SYLLABLE LUOP">ꇆ</td>
            <td class="glyph yi" title="U+A1E9: YI SYLLABLE GUOP">ꇩ</td>
            <td class="glyph yi" title="U+A205: YI SYLLABLE KUOP">ꈅ</td>
            <td class="glyph yi" title="U+A221: YI SYLLABLE GGUOP">ꈡ</td>
            <td class="glyph yi" title="U+A238: YI SYLLABLE MGUOP">ꈸ</td>
            <td class="glyph yi" title="U+A255: YI SYLLABLE HXUOP">ꉕ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A278: YI SYLLABLE HUOP">ꉸ</td>
            <td class="glyph yi" title="U+A286: YI SYLLABLE WUOP">ꊆ</td>
            <td class="glyph yi" title="U+A29A: YI SYLLABLE ZUOP">ꊚ</td>
            <td class="glyph yi" title="U+A2BC: YI SYLLABLE CUOP">ꊼ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A316: YI SYLLABLE SUOP">ꌖ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A34C: YI SYLLABLE ZHUOP">ꍌ</td>
            <td class="glyph yi" title="U+A368: YI SYLLABLE CHUOP">ꍨ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3B1: YI SYLLABLE SHUOP">ꎱ</td>
            <td class="glyph yi" title="U+A3CC: YI SYLLABLE RUOP">ꏌ</td>
            <td class="glyph yi" title="U+A3EB: YI SYLLABLE JUOP">ꏫ</td>
            <td class="glyph yi" title="U+A407: YI SYLLABLE QUOP">ꐇ</td>
            <td class="glyph yi" title="U+A422: YI SYLLABLE JJUOP">ꐢ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A454: YI SYLLABLE NYUOP">ꑔ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A47C: YI SYLLABLE YUOP">ꑼ</td>
        </tr>
        <tr>
            <th class="rowHeader">ot</th>
            <td class="glyph yi" title="U+A00F: YI SYLLABLE OT">ꀏ</td>
            <td class="glyph yi" title="U+A025: YI SYLLABLE BOT">ꀥ</td>
            <td class="glyph yi" title="U+A046: YI SYLLABLE POT">ꁆ</td>
            <td class="glyph yi" title="U+A065: YI SYLLABLE BBOT">ꁥ</td>
            <td class="glyph yi" title="U+A081: YI SYLLABLE NBOT">ꂁ</td>
            <td class="glyph yi" title="U+A09F: YI SYLLABLE HMOT">ꂟ</td>
            <td class="glyph yi" title="U+A0BD: YI SYLLABLE MOT">ꂽ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0EE: YI SYLLABLE VOT">ꃮ</td>
            <td class="glyph yi" title="U+A10D: YI SYLLABLE DOT">ꄍ</td>
            <td class="glyph yi" title="U+A129: YI SYLLABLE TOT">ꄩ</td>
            <td class="glyph yi" title="U+A144: YI SYLLABLE DDOT">ꅄ</td>
            <td class="glyph yi" title="U+A15B: YI SYLLABLE NDOT">ꅛ</td>
            <td class="glyph yi" title="U+A176: YI SYLLABLE HNOT">ꅶ</td>
            <td class="glyph yi" title="U+A18A: YI SYLLABLE NOT">ꆊ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1C7: YI SYLLABLE LOT">ꇇ</td>
            <td class="glyph yi" title="U+A1EA: YI SYLLABLE GOT">ꇪ</td>
            <td class="glyph yi" title="U+A206: YI SYLLABLE KOT">ꈆ</td>
            <td class="glyph yi" title="U+A222: YI SYLLABLE GGOT">ꈢ</td>
            <td class="glyph yi" title="U+A239: YI SYLLABLE MGOT">ꈹ</td>
            <td class="glyph yi" title="U+A256: YI SYLLABLE HXOT">ꉖ</td>
            <td class="glyph yi" title="U+A267: YI SYLLABLE NGOT">ꉧ</td>
            <td class="glyph yi" title="U+A279: YI SYLLABLE HOT">ꉹ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A29B: YI SYLLABLE ZOT">ꊛ</td>
            <td class="glyph yi" title="U+A2BD: YI SYLLABLE COT">ꊽ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A317: YI SYLLABLE SOT">ꌗ</td>
            <td class="glyph yi" title="U+A335: YI SYLLABLE SSOT">ꌵ</td>
            <td class="glyph yi" title="U+A34D: YI SYLLABLE ZHOT">ꍍ</td>
            <td class="glyph yi" title="U+A369: YI SYLLABLE CHOT">ꍩ</td>
            <td class="glyph yi" title="U+A380: YI SYLLABLE RROT">ꎀ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3B2: YI SYLLABLE SHOT">ꎲ</td>
            <td class="glyph yi" title="U+A3CD: YI SYLLABLE ROT">ꏍ</td>
            <td class="glyph yi" title="U+A3EC: YI SYLLABLE JOT">ꏬ</td>
            <td class="glyph yi" title="U+A408: YI SYLLABLE QOT">ꐈ</td>
            <td class="glyph yi" title="U+A423: YI SYLLABLE JJOT">ꐣ</td>
            <td class="glyph yi" title="U+A43B: YI SYLLABLE NJOT">ꐻ</td>
            <td class="glyph yi" title="U+A455: YI SYLLABLE NYOT">ꑕ</td>
            <td class="glyph yi" title="U+A467: YI SYLLABLE XOT">ꑧ</td>
            <td class="glyph yi" title="U+A47D: YI SYLLABLE YOT">ꑽ</td>
        </tr>
        <tr>
            <th class="rowHeader">ox</th>
            <td class="glyph yi" title="U+A010: YI SYLLABLE OX">ꀐ</td>
            <td class="glyph yi" title="U+A026: YI SYLLABLE BOX">ꀦ</td>
            <td class="glyph yi" title="U+A047: YI SYLLABLE POX">ꁇ</td>
            <td class="glyph yi" title="U+A066: YI SYLLABLE BBOX">ꁦ</td>
            <td class="glyph yi" title="U+A082: YI SYLLABLE NBOX">ꂂ</td>
            <td class="glyph yi" title="U+A0A0: YI SYLLABLE HMOX">ꂠ</td>
            <td class="glyph yi" title="U+A0BE: YI SYLLABLE MOX">ꂾ</td>
            <td class="glyph yi" title="U+A0D5: YI SYLLABLE FOX">ꃕ</td>
            <td class="glyph yi" title="U+A0EF: YI SYLLABLE VOX">ꃯ</td>
            <td class="glyph yi" title="U+A10E: YI SYLLABLE DOX">ꄎ</td>
            <td class="glyph yi" title="U+A12A: YI SYLLABLE TOX">ꄪ</td>
            <td class="glyph yi" title="U+A145: YI SYLLABLE DDOX">ꅅ</td>
            <td class="glyph yi" title="U+A15C: YI SYLLABLE NDOX">ꅜ</td>
            <td class="glyph yi" title="U+A177: YI SYLLABLE HNOX">ꅷ</td>
            <td class="glyph yi" title="U+A18B: YI SYLLABLE NOX">ꆋ</td>
            <td class="glyph yi" title="U+A1A5: YI SYLLABLE HLOX">ꆥ</td>
            <td class="glyph yi" title="U+A1C8: YI SYLLABLE LOX">ꇈ</td>
            <td class="glyph yi" title="U+A1EB: YI SYLLABLE GOX">ꇫ</td>
            <td class="glyph yi" title="U+A207: YI SYLLABLE KOX">ꈇ</td>
            <td class="glyph yi" title="U+A223: YI SYLLABLE GGOX">ꈣ</td>
            <td class="glyph yi" title="U+A23A: YI SYLLABLE MGOX">ꈺ</td>
            <td class="glyph yi" title="U+A257: YI SYLLABLE HXOX">ꉗ</td>
            <td class="glyph yi" title="U+A268: YI SYLLABLE NGOX">ꉨ</td>
            <td class="glyph yi" title="U+A27A: YI SYLLABLE HOX">ꉺ</td>
            <td class="glyph yi" title="U+A287: YI SYLLABLE WOX">ꊇ</td>
            <td class="glyph yi" title="U+A29C: YI SYLLABLE ZOX">ꊜ</td>
            <td class="glyph yi" title="U+A2BE: YI SYLLABLE COX">ꊾ</td>
            <td class="glyph yi" title="U+A2DC: YI SYLLABLE ZZOX">ꋜ</td>
            <td class="glyph yi" title="U+A2FA: YI SYLLABLE NZOX">ꋺ</td>
            <td class="glyph yi" title="U+A318: YI SYLLABLE SOX">ꌘ</td>
            <td class="glyph yi" title="U+A336: YI SYLLABLE SSOX">ꌶ</td>
            <td class="glyph yi" title="U+A34E: YI SYLLABLE ZHOX">ꍎ</td>
            <td class="glyph yi" title="U+A36A: YI SYLLABLE CHOX">ꍪ</td>
            <td class="glyph yi" title="U+A381: YI SYLLABLE RROX">ꎁ</td>
            <td class="glyph yi" title="U+A398: YI SYLLABLE NROX">ꎘ</td>
            <td class="glyph yi" title="U+A3B3: YI SYLLABLE SHOX">ꎳ</td>
            <td class="glyph yi" title="U+A3CE: YI SYLLABLE ROX">ꏎ</td>
            <td class="glyph yi" title="U+A3ED: YI SYLLABLE JOX">ꏭ</td>
            <td class="glyph yi" title="U+A409: YI SYLLABLE QOX">ꐉ</td>
            <td class="glyph yi" title="U+A424: YI SYLLABLE JJOX">ꐤ</td>
            <td class="glyph yi" title="U+A43C: YI SYLLABLE NJOX">ꐼ</td>
            <td class="glyph yi" title="U+A456: YI SYLLABLE NYOX">ꑖ</td>
            <td class="glyph yi" title="U+A468: YI SYLLABLE XOX">ꑨ</td>
            <td class="glyph yi" title="U+A47E: YI SYLLABLE YOX">ꑾ</td>
        </tr>
        <tr>
            <th class="rowHeader">o</th>
            <td class="glyph yi" title="U+A011: YI SYLLABLE O">ꀑ</td>
            <td class="glyph yi" title="U+A027: YI SYLLABLE BO">ꀧ</td>
            <td class="glyph yi" title="U+A048: YI SYLLABLE PO">ꁈ</td>
            <td class="glyph yi" title="U+A067: YI SYLLABLE BBO">ꁧ</td>
            <td class="glyph yi" title="U+A083: YI SYLLABLE NBO">ꂃ</td>
            <td class="glyph yi" title="U+A0A1: YI SYLLABLE HMO">ꂡ</td>
            <td class="glyph yi" title="U+A0BF: YI SYLLABLE MO">ꂿ</td>
            <td class="glyph yi" title="U+A0D6: YI SYLLABLE FO">ꃖ</td>
            <td class="glyph yi" title="U+A0F0: YI SYLLABLE VO">ꃰ</td>
            <td class="glyph yi" title="U+A10F: YI SYLLABLE DO">ꄏ</td>
            <td class="glyph yi" title="U+A12B: YI SYLLABLE TO">ꄫ</td>
            <td class="glyph yi" title="U+A146: YI SYLLABLE DDO">ꅆ</td>
            <td class="glyph yi" title="U+A15D: YI SYLLABLE NDO">ꅝ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A18C: YI SYLLABLE NO">ꆌ</td>
            <td class="glyph yi" title="U+A1A6: YI SYLLABLE HLO">ꆦ</td>
            <td class="glyph yi" title="U+A1C9: YI SYLLABLE LO">ꇉ</td>
            <td class="glyph yi" title="U+A1EC: YI SYLLABLE GO">ꇬ</td>
            <td class="glyph yi" title="U+A208: YI SYLLABLE KO">ꈈ</td>
            <td class="glyph yi" title="U+A224: YI SYLLABLE GGO">ꈤ</td>
            <td class="glyph yi" title="U+A23B: YI SYLLABLE MGO">ꈻ</td>
            <td class="glyph yi" title="U+A258: YI SYLLABLE HXO">ꉘ</td>
            <td class="glyph yi" title="U+A269: YI SYLLABLE NGO">ꉩ</td>
            <td class="glyph yi" title="U+A27B: YI SYLLABLE HO">ꉻ</td>
            <td class="glyph yi" title="U+A288: YI SYLLABLE WO">ꊈ</td>
            <td class="glyph yi" title="U+A29D: YI SYLLABLE ZO">ꊝ</td>
            <td class="glyph yi" title="U+A2BF: YI SYLLABLE CO">ꊿ</td>
            <td class="glyph yi" title="U+A2DD: YI SYLLABLE ZZO">ꋝ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A319: YI SYLLABLE SO">ꌙ</td>
            <td class="glyph yi" title="U+A337: YI SYLLABLE SSO">ꌷ</td>
            <td class="glyph yi" title="U+A34F: YI SYLLABLE ZHO">ꍏ</td>
            <td class="glyph yi" title="U+A36B: YI SYLLABLE CHO">ꍫ</td>
            <td class="glyph yi" title="U+A382: YI SYLLABLE RRO">ꎂ</td>
            <td class="glyph yi" title="U+A399: YI SYLLABLE NRO">ꎙ</td>
            <td class="glyph yi" title="U+A3B4: YI SYLLABLE SHO">ꎴ</td>
            <td class="glyph yi" title="U+A3CF: YI SYLLABLE RO">ꏏ</td>
            <td class="glyph yi" title="U+A3EE: YI SYLLABLE JO">ꏮ</td>
            <td class="glyph yi" title="U+A40A: YI SYLLABLE QO">ꐊ</td>
            <td class="glyph yi" title="U+A425: YI SYLLABLE JJO">ꐥ</td>
            <td class="glyph yi" title="U+A43D: YI SYLLABLE NJO">ꐽ</td>
            <td class="glyph yi" title="U+A457: YI SYLLABLE NYO">ꑗ</td>
            <td class="glyph yi" title="U+A469: YI SYLLABLE XO">ꑩ</td>
            <td class="glyph yi" title="U+A47F: YI SYLLABLE YO">ꑿ</td>
        </tr>
        <tr>
            <th class="rowHeader">op</th>
            <td class="glyph yi" title="U+A012: YI SYLLABLE OP">ꀒ</td>
            <td class="glyph yi" title="U+A028: YI SYLLABLE BOP">ꀨ</td>
            <td class="glyph yi" title="U+A049: YI SYLLABLE POP">ꁉ</td>
            <td class="glyph yi" title="U+A068: YI SYLLABLE BBOP">ꁨ</td>
            <td class="glyph yi" title="U+A084: YI SYLLABLE NBOP">ꂄ</td>
            <td class="glyph yi" title="U+A0A2: YI SYLLABLE HMOP">ꂢ</td>
            <td class="glyph yi" title="U+A0C0: YI SYLLABLE MOP">ꃀ</td>
            <td class="glyph yi" title="U+A0D7: YI SYLLABLE FOP">ꃗ</td>
            <td class="glyph yi" title="U+A0F1: YI SYLLABLE VOP">ꃱ</td>
            <td class="glyph yi" title="U+A110: YI SYLLABLE DOP">ꄐ</td>
            <td class="glyph yi" title="U+A12C: YI SYLLABLE TOP">ꄬ</td>
            <td class="glyph yi" title="U+A147: YI SYLLABLE DDOP">ꅇ</td>
            <td class="glyph yi" title="U+A15E: YI SYLLABLE NDOP">ꅞ</td>
            <td class="glyph yi" title="U+A178: YI SYLLABLE HNOP">ꅸ</td>
            <td class="glyph yi" title="U+A18D: YI SYLLABLE NOP">ꆍ</td>
            <td class="glyph yi" title="U+A1A7: YI SYLLABLE HLOP">ꆧ</td>
            <td class="glyph yi" title="U+A1CA: YI SYLLABLE LOP">ꇊ</td>
            <td class="glyph yi" title="U+A1ED: YI SYLLABLE GOP">ꇭ</td>
            <td class="glyph yi" title="U+A209: YI SYLLABLE KOP">ꈉ</td>
            <td class="glyph yi" title="U+A225: YI SYLLABLE GGOP">ꈥ</td>
            <td class="glyph yi" title="U+A23C: YI SYLLABLE MGOP">ꈼ</td>
            <td class="glyph yi" title="U+A259: YI SYLLABLE HXOP">ꉙ</td>
            <td class="glyph yi" title="U+A26A: YI SYLLABLE NGOP">ꉪ</td>
            <td class="glyph yi" title="U+A27C: YI SYLLABLE HOP">ꉼ</td>
            <td class="glyph yi" title="U+A289: YI SYLLABLE WOP">ꊉ</td>
            <td class="glyph yi" title="U+A29E: YI SYLLABLE ZOP">ꊞ</td>
            <td class="glyph yi" title="U+A2C0: YI SYLLABLE COP">ꋀ</td>
            <td class="glyph yi" title="U+A2DE: YI SYLLABLE ZZOP">ꋞ</td>
            <td class="glyph yi" title="U+A2FB: YI SYLLABLE NZOP">ꋻ</td>
            <td class="glyph yi" title="U+A31A: YI SYLLABLE SOP">ꌚ</td>
            <td class="glyph yi" title="U+A338: YI SYLLABLE SSOP">ꌸ</td>
            <td class="glyph yi" title="U+A350: YI SYLLABLE ZHOP">ꍐ</td>
            <td class="glyph yi" title="U+A36C: YI SYLLABLE CHOP">ꍬ</td>
            <td class="glyph yi" title="U+A383: YI SYLLABLE RROP">ꎃ</td>
            <td class="glyph yi" title="U+A39A: YI SYLLABLE NROP">ꎚ</td>
            <td class="glyph yi" title="U+A3B5: YI SYLLABLE SHOP">ꎵ</td>
            <td class="glyph yi" title="U+A3D0: YI SYLLABLE ROP">ꏐ</td>
            <td class="glyph yi" title="U+A3EF: YI SYLLABLE JOP">ꏯ</td>
            <td class="glyph yi" title="U+A40B: YI SYLLABLE QOP">ꐋ</td>
            <td class="glyph yi" title="U+A426: YI SYLLABLE JJOP">ꐦ</td>
            <td class="glyph yi" title="U+A43E: YI SYLLABLE NJOP">ꐾ</td>
            <td class="glyph yi" title="U+A458: YI SYLLABLE NYOP">ꑘ</td>
            <td class="glyph yi" title="U+A46A: YI SYLLABLE XOP">ꑪ</td>
            <td class="glyph yi" title="U+A480: YI SYLLABLE YOP">ꒀ</td>
        </tr>
        <tr>
            <th class="rowHeader">et</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1EE: YI SYLLABLE GET">ꇮ</td>
            <td class="glyph yi" title="U+A20A: YI SYLLABLE KET">ꈊ</td>
            <td class="glyph yi" title="U+A226: YI SYLLABLE GGET">ꈦ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A351: YI SYLLABLE ZHET">ꍑ</td>
            <td class="glyph yi" title="U+A36D: YI SYLLABLE CHET">ꍭ</td>
            <td class="glyph yi" title="U+A384: YI SYLLABLE RRET">ꎄ</td>
            <td class="glyph yi" title="U+A39B: YI SYLLABLE NRET">ꎛ</td>
            <td class="glyph yi" title="U+A3B6: YI SYLLABLE SHET">ꎶ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ex</th>
            <td class="glyph yi" title="U+A013: YI SYLLABLE EX">ꀓ</td>
            <td class="glyph yi" title="U+A029: YI SYLLABLE BEX">ꀩ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A069: YI SYLLABLE BBEX">ꁩ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0C1: YI SYLLABLE MEX">ꃁ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0F2: YI SYLLABLE VEX">ꃲ</td>
            <td class="glyph yi" title="U+A111: YI SYLLABLE DEX">ꄑ</td>
            <td class="glyph yi" title="U+A12D: YI SYLLABLE TEX">ꄭ</td>
            <td class="glyph yi" title="U+A148: YI SYLLABLE DDEX">ꅈ</td>
            <td class="glyph yi" title="U+A15F: YI SYLLABLE NDEX">ꅟ</td>
            <td class="glyph yi" title="U+A179: YI SYLLABLE HNEX">ꅹ</td>
            <td class="glyph yi" title="U+A18E: YI SYLLABLE NEX">ꆎ</td>
            <td class="glyph yi" title="U+A1A8: YI SYLLABLE HLEX">ꆨ</td>
            <td class="glyph yi" title="U+A1CB: YI SYLLABLE LEX">ꇋ</td>
            <td class="glyph yi" title="U+A1EF: YI SYLLABLE GEX">ꇯ</td>
            <td class="glyph yi" title="U+A20B: YI SYLLABLE KEX">ꈋ</td>
            <td class="glyph yi" title="U+A227: YI SYLLABLE GGEX">ꈧ</td>
            <td class="glyph yi" title="U+A23D: YI SYLLABLE MGEX">ꈽ</td>
            <td class="glyph yi" title="U+A25A: YI SYLLABLE HXEX">ꉚ</td>
            <td class="glyph yi" title="U+A26B: YI SYLLABLE NGEX">ꉫ</td>
            <td class="glyph yi" title="U+A27D: YI SYLLABLE HEX">ꉽ</td>
            <td class="glyph yi" title="U+A28A: YI SYLLABLE WEX">ꊊ</td>
            <td class="glyph yi" title="U+A29F: YI SYLLABLE ZEX">ꊟ</td>
            <td class="glyph yi" title="U+A2C1: YI SYLLABLE CEX">ꋁ</td>
            <td class="glyph yi" title="U+A2DF: YI SYLLABLE ZZEX">ꋟ</td>
            <td class="glyph yi" title="U+A2FC: YI SYLLABLE NZEX">ꋼ</td>
            <td class="glyph yi" title="U+A31B: YI SYLLABLE SEX">ꌛ</td>
            <td class="glyph yi" title="U+A339: YI SYLLABLE SSEX">ꌹ</td>
            <td class="glyph yi" title="U+A352: YI SYLLABLE ZHEX">ꍒ</td>
            <td class="glyph yi" title="U+A36E: YI SYLLABLE CHEX">ꍮ</td>
            <td class="glyph yi" title="U+A385: YI SYLLABLE RREX">ꎅ</td>
            <td class="glyph yi" title="U+A39C: YI SYLLABLE NREX">ꎜ</td>
            <td class="glyph yi" title="U+A3B7: YI SYLLABLE SHEX">ꎷ</td>
            <td class="glyph yi" title="U+A3D1: YI SYLLABLE REX">ꏑ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">e</th>
            <td class="glyph yi" title="U+A014: YI SYLLABLE E">ꀔ</td>
            <td class="glyph yi" title="U+A02A: YI SYLLABLE BE">ꀪ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A06A: YI SYLLABLE BBE">ꁪ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0C2: YI SYLLABLE ME">ꃂ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A112: YI SYLLABLE DE">ꄒ</td>
            <td class="glyph yi" title="U+A12E: YI SYLLABLE TE">ꄮ</td>
            <td class="glyph yi" title="U+A149: YI SYLLABLE DDE">ꅉ</td>
            <td class="glyph yi" title="U+A160: YI SYLLABLE NDE">ꅠ</td>
            <td class="glyph yi" title="U+A17A: YI SYLLABLE HNE">ꅺ</td>
            <td class="glyph yi" title="U+A18F: YI SYLLABLE NE">ꆏ</td>
            <td class="glyph yi" title="U+A1A9: YI SYLLABLE HLE">ꆩ</td>
            <td class="glyph yi" title="U+A1CC: YI SYLLABLE LE">ꇌ</td>
            <td class="glyph yi" title="U+A1F0: YI SYLLABLE GE">ꇰ</td>
            <td class="glyph yi" title="U+A20C: YI SYLLABLE KE">ꈌ</td>
            <td class="glyph yi" title="U+A228: YI SYLLABLE GGE">ꈨ</td>
            <td class="glyph yi" title="U+A23E: YI SYLLABLE MGE">ꈾ</td>
            <td class="glyph yi" title="U+A25B: YI SYLLABLE HXE">ꉛ</td>
            <td class="glyph yi" title="U+A26C: YI SYLLABLE NGE">ꉬ</td>
            <td class="glyph yi" title="U+A27E: YI SYLLABLE HE">ꉾ</td>
            <td class="glyph yi" title="U+A28B: YI SYLLABLE WE">ꊋ</td>
            <td class="glyph yi" title="U+A2A0: YI SYLLABLE ZE">ꊠ</td>
            <td class="glyph yi" title="U+A2C2: YI SYLLABLE CE">ꋂ</td>
            <td class="glyph yi" title="U+A2E0: YI SYLLABLE ZZE">ꋠ</td>
            <td class="glyph yi" title="U+A2FD: YI SYLLABLE NZE">ꋽ</td>
            <td class="glyph yi" title="U+A31C: YI SYLLABLE SE">ꌜ</td>
            <td class="glyph yi" title="U+A33A: YI SYLLABLE SSE">ꌺ</td>
            <td class="glyph yi" title="U+A353: YI SYLLABLE ZHE">ꍓ</td>
            <td class="glyph yi" title="U+A36F: YI SYLLABLE CHE">ꍯ</td>
            <td class="glyph yi" title="U+A386: YI SYLLABLE RRE">ꎆ</td>
            <td class="glyph yi" title="U+A39D: YI SYLLABLE NRE">ꎝ</td>
            <td class="glyph yi" title="U+A3B8: YI SYLLABLE SHE">ꎸ</td>
            <td class="glyph yi" title="U+A3D2: YI SYLLABLE RE">ꏒ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ep</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02B: YI SYLLABLE BEP">ꀫ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A06B: YI SYLLABLE BBEP">ꁫ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0F3: YI SYLLABLE VEP">ꃳ</td>
            <td class="glyph yi" title="U+A113: YI SYLLABLE DEP">ꄓ</td>
            <td class="glyph yi" title="U+A12F: YI SYLLABLE TEP">ꄯ</td>
            <td class="glyph yi" title="U+A14A: YI SYLLABLE DDEP">ꅊ</td>
            <td class="glyph yi" title="U+A161: YI SYLLABLE NDEP">ꅡ</td>
            <td class="glyph yi" title="U+A17B: YI SYLLABLE HNEP">ꅻ</td>
            <td class="glyph yi" title="U+A190: YI SYLLABLE NEP">ꆐ</td>
            <td class="glyph yi" title="U+A1AA: YI SYLLABLE HLEP">ꆪ</td>
            <td class="glyph yi" title="U+A1CD: YI SYLLABLE LEP">ꇍ</td>
            <td class="glyph yi" title="U+A1F1: YI SYLLABLE GEP">ꇱ</td>
            <td class="glyph yi" title="U+A20D: YI SYLLABLE KEP">ꈍ</td>
            <td class="glyph yi" title="U+A229: YI SYLLABLE GGEP">ꈩ</td>
            <td class="glyph yi" title="U+A23F: YI SYLLABLE MGEP">ꈿ</td>
            <td class="glyph yi" title="U+A25C: YI SYLLABLE HXEP">ꉜ</td>
            <td class="glyph yi" title="U+A26D: YI SYLLABLE NGEP">ꉭ</td>
            <td class="glyph yi" title="U+A27F: YI SYLLABLE HEP">ꉿ</td>
            <td class="glyph yi" title="U+A28C: YI SYLLABLE WEP">ꊌ</td>
            <td class="glyph yi" title="U+A2A1: YI SYLLABLE ZEP">ꊡ</td>
            <td class="glyph yi" title="U+A2C3: YI SYLLABLE CEP">ꋃ</td>
            <td class="glyph yi" title="U+A2E1: YI SYLLABLE ZZEP">ꋡ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A31D: YI SYLLABLE SEP">ꌝ</td>
            <td class="glyph yi" title="U+A33B: YI SYLLABLE SSEP">ꌻ</td>
            <td class="glyph yi" title="U+A354: YI SYLLABLE ZHEP">ꍔ</td>
            <td class="glyph yi" title="U+A370: YI SYLLABLE CHEP">ꍰ</td>
            <td class="glyph yi" title="U+A387: YI SYLLABLE RREP">ꎇ</td>
            <td class="glyph yi" title="U+A39E: YI SYLLABLE NREP">ꎞ</td>
            <td class="glyph yi" title="U+A3B9: YI SYLLABLE SHEP">ꎹ</td>
            <td class="glyph yi" title="U+A3D3: YI SYLLABLE REP">ꏓ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ut</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02C: YI SYLLABLE BUT">ꀬ</td>
            <td class="glyph yi" title="U+A04A: YI SYLLABLE PUT">ꁊ</td>
            <td class="glyph yi" title="U+A06C: YI SYLLABLE BBUT">ꁬ</td>
            <td class="glyph yi" title="U+A085: YI SYLLABLE NBUT">ꂅ</td>
            <td class="glyph yi" title="U+A0A3: YI SYLLABLE HMUT">ꂣ</td>
            <td class="glyph yi" title="U+A0C3: YI SYLLABLE MUT">ꃃ</td>
            <td class="glyph yi" title="U+A0D8: YI SYLLABLE FUT">ꃘ</td>
            <td class="glyph yi" title="U+A0F4: YI SYLLABLE VUT">ꃴ</td>
            <td class="glyph yi" title="U+A114: YI SYLLABLE DUT">ꄔ</td>
            <td class="glyph yi" title="U+A130: YI SYLLABLE TUT">ꄰ</td>
            <td class="glyph yi" title="U+A14B: YI SYLLABLE DDUT">ꅋ</td>
            <td class="glyph yi" title="U+A162: YI SYLLABLE NDUT">ꅢ</td>
            <td class="glyph yi" title="U+A17C: YI SYLLABLE HNUT">ꅼ</td>
            <td class="glyph yi" title="U+A191: YI SYLLABLE NUT">ꆑ</td>
            <td class="glyph yi" title="U+A1AB: YI SYLLABLE HLUT">ꆫ</td>
            <td class="glyph yi" title="U+A1CE: YI SYLLABLE LUT">ꇎ</td>
            <td class="glyph yi" title="U+A1F2: YI SYLLABLE GUT">ꇲ</td>
            <td class="glyph yi" title="U+A20E: YI SYLLABLE KUT">ꈎ</td>
            <td class="glyph yi" title="U+A22A: YI SYLLABLE GGUT">ꈪ</td>
            <td class="glyph yi" title="U+A240: YI SYLLABLE MGUT">ꉀ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A2: YI SYLLABLE ZUT">ꊢ</td>
            <td class="glyph yi" title="U+A2C4: YI SYLLABLE CUT">ꋄ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A31E: YI SYLLABLE SUT">ꌞ</td>
            <td class="glyph yi" title="U+A33C: YI SYLLABLE SSUT">ꌼ</td>
            <td class="glyph yi" title="U+A355: YI SYLLABLE ZHUT">ꍕ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A388: YI SYLLABLE RRUT">ꎈ</td>
            <td class="glyph yi" title="U+A39F: YI SYLLABLE NRUT">ꎟ</td>
            <td class="glyph yi" title="U+A3BA: YI SYLLABLE SHUT">ꎺ</td>
            <td class="glyph yi" title="U+A3D4: YI SYLLABLE RUT">ꏔ</td>
            <td class="glyph yi" title="U+A3F0: YI SYLLABLE JUT">ꏰ</td>
            <td class="glyph yi" title="U+A40C: YI SYLLABLE QUT">ꐌ</td>
            <td class="glyph yi" title="U+A427: YI SYLLABLE JJUT">ꐧ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A459: YI SYLLABLE NYUT">ꑙ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A481: YI SYLLABLE YUT">ꒁ</td>
        </tr>
        <tr>
            <th class="rowHeader">ux</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02D: YI SYLLABLE BUX">ꀭ</td>
            <td class="glyph yi" title="U+A04B: YI SYLLABLE PUX">ꁋ</td>
            <td class="glyph yi" title="U+A06D: YI SYLLABLE BBUX">ꁭ</td>
            <td class="glyph yi" title="U+A086: YI SYLLABLE NBUX">ꂆ</td>
            <td class="glyph yi" title="U+A0A4: YI SYLLABLE HMUX">ꂤ</td>
            <td class="glyph yi" title="U+A0C4: YI SYLLABLE MUX">ꃄ</td>
            <td class="glyph yi" title="U+A0D9: YI SYLLABLE FUX">ꃙ</td>
            <td class="glyph yi" title="U+A0F5: YI SYLLABLE VUX">ꃵ</td>
            <td class="glyph yi" title="U+A115: YI SYLLABLE DUX">ꄕ</td>
            <td class="glyph yi" title="U+A131: YI SYLLABLE TUX">ꄱ</td>
            <td class="glyph yi" title="U+A14C: YI SYLLABLE DDUX">ꅌ</td>
            <td class="glyph yi" title="U+A163: YI SYLLABLE NDUX">ꅣ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A192: YI SYLLABLE NUX">ꆒ</td>
            <td class="glyph yi" title="U+A1AC: YI SYLLABLE HLUX">ꆬ</td>
            <td class="glyph yi" title="U+A1CF: YI SYLLABLE LUX">ꇏ</td>
            <td class="glyph yi" title="U+A1F3: YI SYLLABLE GUX">ꇳ</td>
            <td class="glyph yi" title="U+A20F: YI SYLLABLE KUX">ꈏ</td>
            <td class="glyph yi" title="U+A22B: YI SYLLABLE GGUX">ꈫ</td>
            <td class="glyph yi" title="U+A241: YI SYLLABLE MGUX">ꉁ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A3: YI SYLLABLE ZUX">ꊣ</td>
            <td class="glyph yi" title="U+A2C5: YI SYLLABLE CUX">ꋅ</td>
            <td class="glyph yi" title="U+A2E2: YI SYLLABLE ZZUX">ꋢ</td>
            <td class="glyph yi" title="U+A2FE: YI SYLLABLE NZUX">ꋾ</td>
            <td class="glyph yi" title="U+A31F: YI SYLLABLE SUX">ꌟ</td>
            <td class="glyph yi" title="U+A33D: YI SYLLABLE SSUX">ꌽ</td>
            <td class="glyph yi" title="U+A356: YI SYLLABLE ZHUX">ꍖ</td>
            <td class="glyph yi" title="U+A371: YI SYLLABLE CHUX">ꍱ</td>
            <td class="glyph yi" title="U+A389: YI SYLLABLE RRUX">ꎉ</td>
            <td class="glyph yi" title="U+A3A0: YI SYLLABLE NRUX">ꎠ</td>
            <td class="glyph yi" title="U+A3BB: YI SYLLABLE SHUX">ꎻ</td>
            <td class="glyph yi" title="U+A3D5: YI SYLLABLE RUX">ꏕ</td>
            <td class="glyph yi" title="U+A3F1: YI SYLLABLE JUX">ꏱ</td>
            <td class="glyph yi" title="U+A40D: YI SYLLABLE QUX">ꐍ</td>
            <td class="glyph yi" title="U+A428: YI SYLLABLE JJUX">ꐨ</td>
            <td class="glyph yi" title="U+A43F: YI SYLLABLE NJUX">ꐿ</td>
            <td class="glyph yi" title="U+A45A: YI SYLLABLE NYUX">ꑚ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A482: YI SYLLABLE YUX">ꒂ</td>
        </tr>
        <tr>
            <th class="rowHeader">u</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02E: YI SYLLABLE BU">ꀮ</td>
            <td class="glyph yi" title="U+A04C: YI SYLLABLE PU">ꁌ</td>
            <td class="glyph yi" title="U+A06E: YI SYLLABLE BBU">ꁮ</td>
            <td class="glyph yi" title="U+A087: YI SYLLABLE NBU">ꂇ</td>
            <td class="glyph yi" title="U+A0A5: YI SYLLABLE HMU">ꂥ</td>
            <td class="glyph yi" title="U+A0C5: YI SYLLABLE MU">ꃅ</td>
            <td class="glyph yi" title="U+A0DA: YI SYLLABLE FU">ꃚ</td>
            <td class="glyph yi" title="U+A0F6: YI SYLLABLE VU">ꃶ</td>
            <td class="glyph yi" title="U+A116: YI SYLLABLE DU">ꄖ</td>
            <td class="glyph yi" title="U+A132: YI SYLLABLE TU">ꄲ</td>
            <td class="glyph yi" title="U+A14D: YI SYLLABLE DDU">ꅍ</td>
            <td class="glyph yi" title="U+A164: YI SYLLABLE NDU">ꅤ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A193: YI SYLLABLE NU">ꆓ</td>
            <td class="glyph yi" title="U+A1AD: YI SYLLABLE HLU">ꆭ</td>
            <td class="glyph yi" title="U+A1D0: YI SYLLABLE LU">ꇐ</td>
            <td class="glyph yi" title="U+A1F4: YI SYLLABLE GU">ꇴ</td>
            <td class="glyph yi" title="U+A210: YI SYLLABLE KU">ꈐ</td>
            <td class="glyph yi" title="U+A22C: YI SYLLABLE GGU">ꈬ</td>
            <td class="glyph yi" title="U+A242: YI SYLLABLE MGU">ꉂ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A4: YI SYLLABLE ZU">ꊤ</td>
            <td class="glyph yi" title="U+A2C6: YI SYLLABLE CU">ꋆ</td>
            <td class="glyph yi" title="U+A2E3: YI SYLLABLE ZZU">ꋣ</td>
            <td class="glyph yi" title="U+A2FF: YI SYLLABLE NZU">ꋿ</td>
            <td class="glyph yi" title="U+A320: YI SYLLABLE SU">ꌠ</td>
            <td class="glyph yi" title="U+A33E: YI SYLLABLE SSU">ꌾ</td>
            <td class="glyph yi" title="U+A357: YI SYLLABLE ZHU">ꍗ</td>
            <td class="glyph yi" title="U+A372: YI SYLLABLE CHU">ꍲ</td>
            <td class="glyph yi" title="U+A38A: YI SYLLABLE RRU">ꎊ</td>
            <td class="glyph yi" title="U+A3A1: YI SYLLABLE NRU">ꎡ</td>
            <td class="glyph yi" title="U+A3BC: YI SYLLABLE SHU">ꎼ</td>
            <td class="glyph yi" title="U+A3D6: YI SYLLABLE RU">ꏖ</td>
            <td class="glyph yi" title="U+A3F2: YI SYLLABLE JU">ꏲ</td>
            <td class="glyph yi" title="U+A40E: YI SYLLABLE QU">ꐎ</td>
            <td class="glyph yi" title="U+A429: YI SYLLABLE JJU">ꐩ</td>
            <td class="glyph yi" title="U+A440: YI SYLLABLE NJU">ꑀ</td>
            <td class="glyph yi" title="U+A45B: YI SYLLABLE NYU">ꑛ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A483: YI SYLLABLE YU">ꒃ</td>
        </tr>
        <tr>
            <th class="rowHeader">up</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02F: YI SYLLABLE BUP">ꀯ</td>
            <td class="glyph yi" title="U+A04D: YI SYLLABLE PUP">ꁍ</td>
            <td class="glyph yi" title="U+A06F: YI SYLLABLE BBUP">ꁯ</td>
            <td class="glyph yi" title="U+A088: YI SYLLABLE NBUP">ꂈ</td>
            <td class="glyph yi" title="U+A0A6: YI SYLLABLE HMUP">ꂦ</td>
            <td class="glyph yi" title="U+A0C6: YI SYLLABLE MUP">ꃆ</td>
            <td class="glyph yi" title="U+A0DB: YI SYLLABLE FUP">ꃛ</td>
            <td class="glyph yi" title="U+A0F7: YI SYLLABLE VUP">ꃷ</td>
            <td class="glyph yi" title="U+A117: YI SYLLABLE DUP">ꄗ</td>
            <td class="glyph yi" title="U+A133: YI SYLLABLE TUP">ꄳ</td>
            <td class="glyph yi" title="U+A14E: YI SYLLABLE DDUP">ꅎ</td>
            <td class="glyph yi" title="U+A165: YI SYLLABLE NDUP">ꅥ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A194: YI SYLLABLE NUP">ꆔ</td>
            <td class="glyph yi" title="U+A1AE: YI SYLLABLE HLUP">ꆮ</td>
            <td class="glyph yi" title="U+A1D1: YI SYLLABLE LUP">ꇑ</td>
            <td class="glyph yi" title="U+A1F5: YI SYLLABLE GUP">ꇵ</td>
            <td class="glyph yi" title="U+A211: YI SYLLABLE KUP">ꈑ</td>
            <td class="glyph yi" title="U+A22D: YI SYLLABLE GGUP">ꈭ</td>
            <td class="glyph yi" title="U+A243: YI SYLLABLE MGUP">ꉃ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A5: YI SYLLABLE ZUP">ꊥ</td>
            <td class="glyph yi" title="U+A2C7: YI SYLLABLE CUP">ꋇ</td>
            <td class="glyph yi" title="U+A2E4: YI SYLLABLE ZZUP">ꋤ</td>
            <td class="glyph yi" title="U+A300: YI SYLLABLE NZUP">ꌀ</td>
            <td class="glyph yi" title="U+A321: YI SYLLABLE SUP">ꌡ</td>
            <td class="glyph yi" title="U+A33F: YI SYLLABLE SSUP">ꌿ</td>
            <td class="glyph yi" title="U+A358: YI SYLLABLE ZHUP">ꍘ</td>
            <td class="glyph yi" title="U+A373: YI SYLLABLE CHUP">ꍳ</td>
            <td class="glyph yi" title="U+A38B: YI SYLLABLE RRUP">ꎋ</td>
            <td class="glyph yi" title="U+A3A2: YI SYLLABLE NRUP">ꎢ</td>
            <td class="glyph yi" title="U+A3BD: YI SYLLABLE SHUP">ꎽ</td>
            <td class="glyph yi" title="U+A3D7: YI SYLLABLE RUP">ꏗ</td>
            <td class="glyph yi" title="U+A3F3: YI SYLLABLE JUP">ꏳ</td>
            <td class="glyph yi" title="U+A40F: YI SYLLABLE QUP">ꐏ</td>
            <td class="glyph yi" title="U+A42A: YI SYLLABLE JJUP">ꐪ</td>
            <td class="glyph yi" title="U+A441: YI SYLLABLE NJUP">ꑁ</td>
            <td class="glyph yi" title="U+A45C: YI SYLLABLE NYUP">ꑜ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A484: YI SYLLABLE YUP">ꒄ</td>
        </tr>
        <tr>
            <th class="rowHeader">urx</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A030: YI SYLLABLE BURX">ꀰ</td>
            <td class="glyph yi" title="U+A04E: YI SYLLABLE PURX">ꁎ</td>
            <td class="glyph yi" title="U+A070: YI SYLLABLE BBURX">ꁰ</td>
            <td class="glyph yi" title="U+A089: YI SYLLABLE NBURX">ꂉ</td>
            <td class="glyph yi" title="U+A0A7: YI SYLLABLE HMURX">ꂧ</td>
            <td class="glyph yi" title="U+A0C7: YI SYLLABLE MURX">ꃇ</td>
            <td class="glyph yi" title="U+A0DC: YI SYLLABLE FURX">ꃜ</td>
            <td class="glyph yi" title="U+A0F8: YI SYLLABLE VURX">ꃸ</td>
            <td class="glyph yi" title="U+A118: YI SYLLABLE DURX">ꄘ</td>
            <td class="glyph yi" title="U+A134: YI SYLLABLE TURX">ꄴ</td>
            <td class="glyph yi" title="U+A14F: YI SYLLABLE DDURX">ꅏ</td>
            <td class="glyph yi" title="U+A166: YI SYLLABLE NDURX">ꅦ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A195: YI SYLLABLE NURX">ꆕ</td>
            <td class="glyph yi" title="U+A1AF: YI SYLLABLE HLURX">ꆯ</td>
            <td class="glyph yi" title="U+A1D2: YI SYLLABLE LURX">ꇒ</td>
            <td class="glyph yi" title="U+A1F6: YI SYLLABLE GURX">ꇶ</td>
            <td class="glyph yi" title="U+A212: YI SYLLABLE KURX">ꈒ</td>
            <td class="glyph yi" title="U+A22E: YI SYLLABLE GGURX">ꈮ</td>
            <td class="glyph yi" title="U+A244: YI SYLLABLE MGURX">ꉄ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A6: YI SYLLABLE ZURX">ꊦ</td>
            <td class="glyph yi" title="U+A2C8: YI SYLLABLE CURX">ꋈ</td>
            <td class="glyph yi" title="U+A2E5: YI SYLLABLE ZZURX">ꋥ</td>
            <td class="glyph yi" title="U+A301: YI SYLLABLE NZURX">ꌁ</td>
            <td class="glyph yi" title="U+A322: YI SYLLABLE SURX">ꌢ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A359: YI SYLLABLE ZHURX">ꍙ</td>
            <td class="glyph yi" title="U+A374: YI SYLLABLE CHURX">ꍴ</td>
            <td class="glyph yi" title="U+A38C: YI SYLLABLE RRURX">ꎌ</td>
            <td class="glyph yi" title="U+A3A3: YI SYLLABLE NRURX">ꎣ</td>
            <td class="glyph yi" title="U+A3BE: YI SYLLABLE SHURX">ꎾ</td>
            <td class="glyph yi" title="U+A3D8: YI SYLLABLE RURX">ꏘ</td>
            <td class="glyph yi" title="U+A3F4: YI SYLLABLE JURX">ꏴ</td>
            <td class="glyph yi" title="U+A410: YI SYLLABLE QURX">ꐐ</td>
            <td class="glyph yi" title="U+A42B: YI SYLLABLE JJURX">ꐫ</td>
            <td class="glyph yi" title="U+A442: YI SYLLABLE NJURX">ꑂ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A485: YI SYLLABLE YURX">ꒅ</td>
        </tr>
        <tr>
            <th class="rowHeader">ur</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A031: YI SYLLABLE BUR">ꀱ</td>
            <td class="glyph yi" title="U+A04F: YI SYLLABLE PUR">ꁏ</td>
            <td class="glyph yi" title="U+A071: YI SYLLABLE BBUR">ꁱ</td>
            <td class="glyph yi" title="U+A08A: YI SYLLABLE NBUR">ꂊ</td>
            <td class="glyph yi" title="U+A0A8: YI SYLLABLE HMUR">ꂨ</td>
            <td class="glyph yi" title="U+A0C8: YI SYLLABLE MUR">ꃈ</td>
            <td class="glyph yi" title="U+A0DD: YI SYLLABLE FUR">ꃝ</td>
            <td class="glyph yi" title="U+A0F9: YI SYLLABLE VUR">ꃹ</td>
            <td class="glyph yi" title="U+A119: YI SYLLABLE DUR">ꄙ</td>
            <td class="glyph yi" title="U+A135: YI SYLLABLE TUR">ꄵ</td>
            <td class="glyph yi" title="U+A150: YI SYLLABLE DDUR">ꅐ</td>
            <td class="glyph yi" title="U+A167: YI SYLLABLE NDUR">ꅧ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A196: YI SYLLABLE NUR">ꆖ</td>
            <td class="glyph yi" title="U+A1B0: YI SYLLABLE HLUR">ꆰ</td>
            <td class="glyph yi" title="U+A1D3: YI SYLLABLE LUR">ꇓ</td>
            <td class="glyph yi" title="U+A1F7: YI SYLLABLE GUR">ꇷ</td>
            <td class="glyph yi" title="U+A213: YI SYLLABLE KUR">ꈓ</td>
            <td class="glyph yi" title="U+A22F: YI SYLLABLE GGUR">ꈯ</td>
            <td class="glyph yi" title="U+A245: YI SYLLABLE MGUR">ꉅ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A7: YI SYLLABLE ZUR">ꊧ</td>
            <td class="glyph yi" title="U+A2C9: YI SYLLABLE CUR">ꋉ</td>
            <td class="glyph yi" title="U+A2E6: YI SYLLABLE ZZUR">ꋦ</td>
            <td class="glyph yi" title="U+A302: YI SYLLABLE NZUR">ꌂ</td>
            <td class="glyph yi" title="U+A323: YI SYLLABLE SUR">ꌣ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A35A: YI SYLLABLE ZHUR">ꍚ</td>
            <td class="glyph yi" title="U+A375: YI SYLLABLE CHUR">ꍵ</td>
            <td class="glyph yi" title="U+A38D: YI SYLLABLE RRUR">ꎍ</td>
            <td class="glyph yi" title="U+A3A4: YI SYLLABLE NRUR">ꎤ</td>
            <td class="glyph yi" title="U+A3BF: YI SYLLABLE SHUR">ꎿ</td>
            <td class="glyph yi" title="U+A3D9: YI SYLLABLE RUR">ꏙ</td>
            <td class="glyph yi" title="U+A3F5: YI SYLLABLE JUR">ꏵ</td>
            <td class="glyph yi" title="U+A411: YI SYLLABLE QUR">ꐑ</td>
            <td class="glyph yi" title="U+A42C: YI SYLLABLE JJUR">ꐬ</td>
            <td class="glyph yi" title="U+A443: YI SYLLABLE NJUR">ꑃ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A486: YI SYLLABLE YUR">ꒆ</td>
        </tr>
        <tr>
            <th class="rowHeader">yt</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A032: YI SYLLABLE BYT">ꀲ</td>
            <td class="glyph yi" title="U+A050: YI SYLLABLE PYT">ꁐ</td>
            <td class="glyph yi" title="U+A072: YI SYLLABLE BBYT">ꁲ</td>
            <td class="glyph yi" title="U+A08B: YI SYLLABLE NBYT">ꂋ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0C9: YI SYLLABLE MYT">ꃉ</td>
            <td class="glyph yi" title="U+A0DE: YI SYLLABLE FYT">ꃞ</td>
            <td class="glyph yi" title="U+A0FA: YI SYLLABLE VYT">ꃺ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B1: YI SYLLABLE HLYT">ꆱ</td>
            <td class="glyph yi" title="U+A1D4: YI SYLLABLE LYT">ꇔ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A8: YI SYLLABLE ZYT">ꊨ</td>
            <td class="glyph yi" title="U+A2CA: YI SYLLABLE CYT">ꋊ</td>
            <td class="glyph yi" title="U+A2E7: YI SYLLABLE ZZYT">ꋧ</td>
            <td class="glyph yi" title="U+A303: YI SYLLABLE NZYT">ꌃ</td>
            <td class="glyph yi" title="U+A324: YI SYLLABLE SYT">ꌤ</td>
            <td class="glyph yi" title="U+A340: YI SYLLABLE SSYT">ꍀ</td>
            <td class="glyph yi" title="U+A35B: YI SYLLABLE ZHYT">ꍛ</td>
            <td class="glyph yi" title="U+A376: YI SYLLABLE CHYT">ꍶ</td>
            <td class="glyph yi" title="U+A38E: YI SYLLABLE RRYT">ꎎ</td>
            <td class="glyph yi" title="U+A3A5: YI SYLLABLE NRYT">ꎥ</td>
            <td class="glyph yi" title="U+A3C0: YI SYLLABLE SHYT">ꏀ</td>
            <td class="glyph yi" title="U+A3DA: YI SYLLABLE RYT">ꏚ</td>
            <td class="glyph yi" title="U+A3F6: YI SYLLABLE JYT">ꏶ</td>
            <td class="glyph yi" title="U+A412: YI SYLLABLE QYT">ꐒ</td>
            <td class="glyph yi" title="U+A42D: YI SYLLABLE JJYT">ꐭ</td>
            <td class="glyph yi" title="U+A444: YI SYLLABLE NJYT">ꑄ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46B: YI SYLLABLE XYT">ꑫ</td>
            <td class="glyph yi" title="U+A487: YI SYLLABLE YYT">ꒇ</td>
        </tr>
        <tr>
            <th class="rowHeader">yx</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A033: YI SYLLABLE BYX">ꀳ</td>
            <td class="glyph yi" title="U+A051: YI SYLLABLE PYX">ꁑ</td>
            <td class="glyph yi" title="U+A073: YI SYLLABLE BBYX">ꁳ</td>
            <td class="glyph yi" title="U+A08C: YI SYLLABLE NBYX">ꂌ</td>
            <td class="glyph yi" title="U+A0A9: YI SYLLABLE HMYX">ꂩ</td>
            <td class="glyph yi" title="U+A0CA: YI SYLLABLE MYX">ꃊ</td>
            <td class="glyph yi" title="U+A0DF: YI SYLLABLE FYX">ꃟ</td>
            <td class="glyph yi" title="U+A0FB: YI SYLLABLE VYX">ꃻ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B2: YI SYLLABLE HLYX">ꆲ</td>
            <td class="glyph yi" title="U+A1D5: YI SYLLABLE LYX">ꇕ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A9: YI SYLLABLE ZYX">ꊩ</td>
            <td class="glyph yi" title="U+A2CB: YI SYLLABLE CYX">ꋋ</td>
            <td class="glyph yi" title="U+A2E8: YI SYLLABLE ZZYX">ꋨ</td>
            <td class="glyph yi" title="U+A304: YI SYLLABLE NZYX">ꌄ</td>
            <td class="glyph yi" title="U+A325: YI SYLLABLE SYX">ꌥ</td>
            <td class="glyph yi" title="U+A341: YI SYLLABLE SSYX">ꍁ</td>
            <td class="glyph yi" title="U+A35C: YI SYLLABLE ZHYX">ꍜ</td>
            <td class="glyph yi" title="U+A377: YI SYLLABLE CHYX">ꍷ</td>
            <td class="glyph yi" title="U+A38F: YI SYLLABLE RRYX">ꎏ</td>
            <td class="glyph yi" title="U+A3A6: YI SYLLABLE NRYX">ꎦ</td>
            <td class="glyph yi" title="U+A3C1: YI SYLLABLE SHYX">ꏁ</td>
            <td class="glyph yi" title="U+A3DB: YI SYLLABLE RYX">ꏛ</td>
            <td class="glyph yi" title="U+A3F7: YI SYLLABLE JYX">ꏷ</td>
            <td class="glyph yi" title="U+A413: YI SYLLABLE QYX">ꐓ</td>
            <td class="glyph yi" title="U+A42E: YI SYLLABLE JJYX">ꐮ</td>
            <td class="glyph yi" title="U+A445: YI SYLLABLE NJYX">ꑅ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46C: YI SYLLABLE XYX">ꑬ</td>
            <td class="glyph yi" title="U+A488: YI SYLLABLE YYX">ꒈ</td>
        </tr>
        <tr>
            <th class="rowHeader">y</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A034: YI SYLLABLE BY">ꀴ</td>
            <td class="glyph yi" title="U+A052: YI SYLLABLE PY">ꁒ</td>
            <td class="glyph yi" title="U+A074: YI SYLLABLE BBY">ꁴ</td>
            <td class="glyph yi" title="U+A08D: YI SYLLABLE NBY">ꂍ</td>
            <td class="glyph yi" title="U+A0AA: YI SYLLABLE HMY">ꂪ</td>
            <td class="glyph yi" title="U+A0CB: YI SYLLABLE MY">ꃋ</td>
            <td class="glyph yi" title="U+A0E0: YI SYLLABLE FY">ꃠ</td>
            <td class="glyph yi" title="U+A0FC: YI SYLLABLE VY">ꃼ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B3: YI SYLLABLE HLY">ꆳ</td>
            <td class="glyph yi" title="U+A1D6: YI SYLLABLE LY">ꇖ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AA: YI SYLLABLE ZY">ꊪ</td>
            <td class="glyph yi" title="U+A2CC: YI SYLLABLE CY">ꋌ</td>
            <td class="glyph yi" title="U+A2E9: YI SYLLABLE ZZY">ꋩ</td>
            <td class="glyph yi" title="U+A305: YI SYLLABLE NZY">ꌅ</td>
            <td class="glyph yi" title="U+A326: YI SYLLABLE SY">ꌦ</td>
            <td class="glyph yi" title="U+A342: YI SYLLABLE SSY">ꍂ</td>
            <td class="glyph yi" title="U+A35D: YI SYLLABLE ZHY">ꍝ</td>
            <td class="glyph yi" title="U+A378: YI SYLLABLE CHY">ꍸ</td>
            <td class="glyph yi" title="U+A390: YI SYLLABLE RRY">ꎐ</td>
            <td class="glyph yi" title="U+A3A7: YI SYLLABLE NRY">ꎧ</td>
            <td class="glyph yi" title="U+A3C2: YI SYLLABLE SHY">ꏂ</td>
            <td class="glyph yi" title="U+A3DC: YI SYLLABLE RY">ꏜ</td>
            <td class="glyph yi" title="U+A3F8: YI SYLLABLE JY">ꏸ</td>
            <td class="glyph yi" title="U+A414: YI SYLLABLE QY">ꐔ</td>
            <td class="glyph yi" title="U+A42F: YI SYLLABLE JJY">ꐯ</td>
            <td class="glyph yi" title="U+A446: YI SYLLABLE NJY">ꑆ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46D: YI SYLLABLE XY">ꑭ</td>
            <td class="glyph yi" title="U+A489: YI SYLLABLE YY">ꒉ</td>
        </tr>
        <tr>
            <th class="rowHeader">yp</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A035: YI SYLLABLE BYP">ꀵ</td>
            <td class="glyph yi" title="U+A053: YI SYLLABLE PYP">ꁓ</td>
            <td class="glyph yi" title="U+A075: YI SYLLABLE BBYP">ꁵ</td>
            <td class="glyph yi" title="U+A08E: YI SYLLABLE NBYP">ꂎ</td>
            <td class="glyph yi" title="U+A0AB: YI SYLLABLE HMYP">ꂫ</td>
            <td class="glyph yi" title="U+A0CC: YI SYLLABLE MYP">ꃌ</td>
            <td class="glyph yi" title="U+A0E1: YI SYLLABLE FYP">ꃡ</td>
            <td class="glyph yi" title="U+A0FD: YI SYLLABLE VYP">ꃽ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B4: YI SYLLABLE HLYP">ꆴ</td>
            <td class="glyph yi" title="U+A1D7: YI SYLLABLE LYP">ꇗ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AB: YI SYLLABLE ZYP">ꊫ</td>
            <td class="glyph yi" title="U+A2CD: YI SYLLABLE CYP">ꋍ</td>
            <td class="glyph yi" title="U+A2EA: YI SYLLABLE ZZYP">ꋪ</td>
            <td class="glyph yi" title="U+A306: YI SYLLABLE NZYP">ꌆ</td>
            <td class="glyph yi" title="U+A327: YI SYLLABLE SYP">ꌧ</td>
            <td class="glyph yi" title="U+A343: YI SYLLABLE SSYP">ꍃ</td>
            <td class="glyph yi" title="U+A35E: YI SYLLABLE ZHYP">ꍞ</td>
            <td class="glyph yi" title="U+A379: YI SYLLABLE CHYP">ꍹ</td>
            <td class="glyph yi" title="U+A391: YI SYLLABLE RRYP">ꎑ</td>
            <td class="glyph yi" title="U+A3A8: YI SYLLABLE NRYP">ꎨ</td>
            <td class="glyph yi" title="U+A3C3: YI SYLLABLE SHYP">ꏃ</td>
            <td class="glyph yi" title="U+A3DD: YI SYLLABLE RYP">ꏝ</td>
            <td class="glyph yi" title="U+A3F9: YI SYLLABLE JYP">ꏹ</td>
            <td class="glyph yi" title="U+A415: YI SYLLABLE QYP">ꐕ</td>
            <td class="glyph yi" title="U+A430: YI SYLLABLE JJYP">ꐰ</td>
            <td class="glyph yi" title="U+A447: YI SYLLABLE NJYP">ꑇ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46E: YI SYLLABLE XYP">ꑮ</td>
            <td class="glyph yi" title="U+A48A: YI SYLLABLE YYP">ꒊ</td>
        </tr>
        <tr>
            <th class="rowHeader">yrx</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A036: YI SYLLABLE BYRX">ꀶ</td>
            <td class="glyph yi" title="U+A054: YI SYLLABLE PYRX">ꁔ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A08F: YI SYLLABLE NBYRX">ꂏ</td>
            <td class="glyph yi" title="U+A0AC: YI SYLLABLE HMYRX">ꂬ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0FE: YI SYLLABLE VYRX">ꃾ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B5: YI SYLLABLE HLYRX">ꆵ</td>
            <td class="glyph yi" title="U+A1D8: YI SYLLABLE LYRX">ꇘ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AC: YI SYLLABLE ZYRX">ꊬ</td>
            <td class="glyph yi" title="U+A2CE: YI SYLLABLE CYRX">ꋎ</td>
            <td class="glyph yi" title="U+A2EB: YI SYLLABLE ZZYRX">ꋫ</td>
            <td class="glyph yi" title="U+A307: YI SYLLABLE NZYRX">ꌇ</td>
            <td class="glyph yi" title="U+A328: YI SYLLABLE SYRX">ꌨ</td>
            <td class="glyph yi" title="U+A344: YI SYLLABLE SSYRX">ꍄ</td>
            <td class="glyph yi" title="U+A35F: YI SYLLABLE ZHYRX">ꍟ</td>
            <td class="glyph yi" title="U+A37A: YI SYLLABLE CHYRX">ꍺ</td>
            <td class="glyph yi" title="U+A392: YI SYLLABLE RRYRX">ꎒ</td>
            <td class="glyph yi" title="U+A3A9: YI SYLLABLE NRYRX">ꎩ</td>
            <td class="glyph yi" title="U+A3C4: YI SYLLABLE SHYRX">ꏄ</td>
            <td class="glyph yi" title="U+A3DE: YI SYLLABLE RYRX">ꏞ</td>
            <td class="glyph yi" title="U+A3FA: YI SYLLABLE JYRX">ꏺ</td>
            <td class="glyph yi" title="U+A416: YI SYLLABLE QYRX">ꐖ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A448: YI SYLLABLE NJYRX">ꑈ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46F: YI SYLLABLE XYRX">ꑯ</td>
            <td class="glyph yi" title="U+A48B: YI SYLLABLE YYRX">ꒋ</td>
        </tr>
        <tr>
            <th class="rowHeader">yr</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A037: YI SYLLABLE BYR">ꀷ</td>
            <td class="glyph yi" title="U+A055: YI SYLLABLE PYR">ꁕ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A090: YI SYLLABLE NBYR">ꂐ</td>
            <td class="glyph yi" title="U+A0AD: YI SYLLABLE HMYR">ꂭ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0FF: YI SYLLABLE VYR">ꃿ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B6: YI SYLLABLE HLYR">ꆶ</td>
            <td class="glyph yi" title="U+A1D9: YI SYLLABLE LYR">ꇙ</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AD: YI SYLLABLE ZYR">ꊭ</td>
            <td class="glyph yi" title="U+A2CF: YI SYLLABLE CYR">ꋏ</td>
            <td class="glyph yi" title="U+A2EC: YI SYLLABLE ZZYR">ꋬ</td>
            <td class="glyph yi" title="U+A308: YI SYLLABLE NZYR">ꌈ</td>
            <td class="glyph yi" title="U+A329: YI SYLLABLE SYR">ꌩ</td>
            <td class="glyph yi" title="U+A345: YI SYLLABLE SSYR">ꍅ</td>
            <td class="glyph yi" title="U+A360: YI SYLLABLE ZHYR">ꍠ</td>
            <td class="glyph yi" title="U+A37B: YI SYLLABLE CHYR">ꍻ</td>
            <td class="glyph yi" title="U+A393: YI SYLLABLE RRYR">ꎓ</td>
            <td class="glyph yi" title="U+A3AA: YI SYLLABLE NRYR">ꎪ</td>
            <td class="glyph yi" title="U+A3C5: YI SYLLABLE SHYR">ꏅ</td>
            <td class="glyph yi" title="U+A3DF: YI SYLLABLE RYR">ꏟ</td>
            <td class="glyph yi" title="U+A3FB: YI SYLLABLE JYR">ꏻ</td>
            <td class="glyph yi" title="U+A417: YI SYLLABLE QYR">ꐗ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A449: YI SYLLABLE NJYR">ꑉ</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A470: YI SYLLABLE XYR">ꑰ</td>
            <td class="glyph yi" title="U+A48C: YI SYLLABLE YYR">ꒌ</td>
        </tr>
    </tbody>
</table>

<p>Press <kbd>w</kbd> then <kbd>space</kbd> to type <span class="glyph yi">ꀕ</span>, the syllable iteration mark (used to reduplicate a preceding syllable).</p>
<h2>Typing punctuation</h2>

<table class="inputSequences" >
  <thead>
    <tr>
      <th>Keys</th>
      <th>Character</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>!</td>
      <td class="glyph yi">&#xff01;</td>
      <td>Fullwidth exclamation mark</td>
    </tr>
    <tr>
      <td>?</td>
      <td class="glyph yi">&#xff1f;</td>
      <td>Fullwidth question mark</td>
    </tr>
    <tr>
      <td>(</td>
      <td class="glyph yi">&#xff08;</td>
      <td>Fullwidth left parenthesis</td>
    </tr>
    <tr>
      <td>)</td>
      <td class="glyph yi">&#xff09;</td>
      <td>Fullwidth right parenthesis</td>
    </tr>
    <tr>
      <td>[</td>
      <td class="glyph yi">&#xff3b;</td>
      <td>Fullwidth left square bracket</td>
    </tr>
    <tr>
      <td>]</td>
      <td class="glyph yi">&#xff3d;</td>
      <td>Fullwidth right square bracket</td>
    </tr>
    <tr>
      <td>|</td>
      <td class="glyph yi">&#xff5c;</td>
      <td>Fullwidth vertical line</td>
    </tr>
    <tr>
      <td>{</td>
      <td class="glyph yi">&#xff5b;</td>
      <td>Fullwidth left curly bracket</td>
    </tr>
    <tr>
      <td>}</td>
      <td class="glyph yi">&#xff5d;</td>
      <td>Fullwidth right curly bracket</td>
    </tr>
    <tr>
      <td>:</td>
      <td class="glyph yi">&#xff1a;</td>
      <td>Fullwidth colon</td>
    </tr>
    <tr>
      <td>;</td>
      <td class="glyph yi">&#xff1b;</td>
      <td>Fullwidth semicolon</td>
    </tr>
    <tr>
      <td>/</td>
      <td class="glyph yi">&#xff0f;</td>
      <td>Fullwidth solidus</td>
    </tr>
    <tr>
      <td><kbd>space</kbd></td>
      <td class="glyph yi">&#x3000;</td>
      <td>Ideographic space</td>
    </tr>
    <tr>
      <td>.</td>
      <td class="glyph yi">&#x3002;</td>
      <td>Ideographic full stop (juhao)</td>
    </tr>
    <tr>
      <td>\</td>
      <td class="glyph yi">&#x3001;</td>
      <td>Ideographic comma (dunhao)</td>
    </tr>
    <tr>
      <td>,</td>
      <td class="glyph yi">&#xff0c;</td>
      <td>Fullwidth comma</td>
    </tr>
    <tr>
      <td>&lt;</td>
      <td class="glyph yi">&#x3008;</td>
      <td>Left angle bracket</td>
    </tr>
    <tr>
      <td>&gt;</td>
      <td class="glyph yi">&#x3009;</td>
      <td>Right angle bracket</td>
    </tr>
    <tr>
      <td>&lt;&lt;</td>
      <td class="glyph yi">&#x300a;</td>
      <td>Left double angle bracket</td>
    </tr>
    <tr>
      <td>&gt;&gt;</td>
      <td class="glyph yi">&#x300b;</td>
      <td>Right double angle bracket</td>
    </tr>
    <tr>
      <td>`</td>
      <td class="glyph yi">&#x2018;</td>
      <td>Left single quotation mark</td>
    </tr>
    <tr>
      <td>'</td>
      <td class="glyph yi">&#x2019;</td>
      <td>Right single quotation mark</td>
    </tr>
    <tr>
        <td>``</td>
      <td class="glyph yi">&#x201c;</td>
      <td>Left double quotation mark</td>
    </tr>
    <tr>
      <td>''</td>
      <td class="glyph yi">&#x201d;</td>
      <td>Right double quotation mark</td>
    </tr>
    <tr>
      <td>..</td>
      <td class="glyph yi">&#x2026;</td>
      <td>Horizontal ellipsis</td>
    </tr>
  </tbody>
</table>
