﻿<?php
  $pagename = 'Galaxie Greek (Mnemonic)';
  $pagetitle = 'Galaxie Greek (Mnemonic)';
  require_once('header.php');
?>



<h1>Galaxie Greek (Mnemonic) Keyboard</h1>

        <p style='margin:0px'>Keyboard &#169; 2004-2011 Galaxie Software and Tavultesoft Pty Ltd</p>

        <br/>
        <a href="#Overview">Overview</a><br/>
        <a href="#UsingGreek">Greek Keyboard</a><br/>
        <a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
        <a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
        <a style='margin-left:20px' href="#Examples">Examples</a><br/>
        <a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
        <a style='margin-left:30px' target="_blank" href='keyboardchart.htm'>Complete Typing Chart</a><br/>
        <a href="#Troubleshooting">Troubleshooting</a><br/>
        <a href="#Resources">Further Resources</a><br/>
        <a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
        <a href="#Technical">Technical Information</a><br/>
        <a style='margin-left:20px' href="#Author">Authorship</a><br/>

        <div id='Overview'>
            <h2>Overview</h2>
            <p>This Keyman keyboard is designed for Koine Greek, a trade language of the ancient Mediterranean and the language of the Septuagint and New Testament Scriptures. It is a mnemonic Keyman keyboard. This means that the arrangement of the letters
                in the Keyman keyboard will depend on the order of the keys on your hardware layout.</p>

            <p>This keyboard has been optimised for use with the following hardware layouts:</p>
            <ul class='columns'>
                <li>AZERTY French</li>
                <li>QWERTY Dutch</li>
                <li>QWERTY Italian</li>
                <li>QWERTY Norwegian</li>
                <li>QWERTY Spanish</li>
                <li>QWERTY Swedish</li>
                <li>QWERTY UK</li>
                <li>QWERTY US</li>
                <li>QWERTZ German</li>
            </ul>

            <p>This keyboard includes an On Screen Keyboard view, which displays best on a QWERTY US layout.</p>

            <p>This keyboard works with standard Unicode fonts.</p>

            <p><a href="#Related">Click here</a> to see other keyboards for Greek.</p>

        </div>
        <div id='UsingGreek' class='break'>
            <h2>Keyboard Layout</h2>

            <div id='osk_tabs'>
                <div class='osk_tab_selected' id='osk_us_tab'><b>QWERTY US</b></div>
                <div class='osk_tab' id='osk_uk_tab'><b>QWERTY UK</b></div>
                <div class='osk_tab' id='osk_fr_tab'><b>AZERTY</b></div>
                <div class='osk_tab' id='osk_de_tab'><b>QWERTZ</b></div>
            </div>

            <div class='osk_tabsheets'>

                <div class='osk_tabsheet_selected' id='osk_us_tabsheet'>
                    <h3 style="clear:left">QWERTY US : Unshifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">`</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">1</div>
                        <div class="keytext">1</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">2</div>
                        <div class="keytext">2</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">3</div>
                        <div class="keytext">3</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">4</div>
                        <div class="keytext">4</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">5</div>
                        <div class="keytext">5</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">6</div>
                        <div class="keytext">6</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">7</div>
                        <div class="keytext">7</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">8</div>
                        <div class="keytext">8</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">9</div>
                        <div class="keytext">9</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">0</div>
                        <div class="keytext">0</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">-</div>
                        <div class="keytext">◌̄</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">=</div>
                        <div class="keytext LTN">‹LTN›</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">Backspace</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">Tab</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">q</div>
                        <div class="keytext">θ</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">w</div>
                        <div class="keytext">ω</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">e</div>
                        <div class="keytext">ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">r</div>
                        <div class="keytext">ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">t</div>
                        <div class="keytext">τ</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">y</div>
                        <div class="keytext">ψ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">u</div>
                        <div class="keytext">υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">i</div>
                        <div class="keytext">ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">o</div>
                        <div class="keytext">ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">p</div>
                        <div class="keytext">π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">[</div>
                        <div class="keytext">◌̔</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">]</div>
                        <div class="keytext">◌̓</div>
                    </div>
                    <div class="key plain" id="K_BKSLASH">
                        <div class="keycap">\</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_CAPS">
                        <div class="keycap">Caps Lock</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">a</div>
                        <div class="keytext">α</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">s</div>
                        <div class="keytext">σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">d</div>
                        <div class="keytext">δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">f</div>
                        <div class="keytext">φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">g</div>
                        <div class="keytext">γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">h</div>
                        <div class="keytext">η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">j</div>
                        <div class="keytext">◌̓</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">k</div>
                        <div class="keytext">κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">l</div>
                        <div class="keytext">λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">;</div>
                        <div class="keytext">;</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">'</div>
                        <div class="keytext">ς</div>
                    </div>
                    <div class="key special" id="K_ENTER">
                        <div class="keycap">Enter</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL">
                        <div class="keycap">Shift</div>
                    </div>
                    <div class="key plain" id="K_oE2">
                        <div class="keycap">\</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">z</div>
                        <div class="keytext">ζ</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">x</div>
                        <div class="keytext">χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">c</div>
                        <div class="keytext">ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">v</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">b</div>
                        <div class="keytext">β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">n</div>
                        <div class="keytext">ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">m</div>
                        <div class="keytext">μ</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">,</div>
                        <div class="keytext">,</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">.</div>
                        <div class="keytext">.</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">/</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">Shift</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">Ctrl</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">Alt</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                        <div class="keytext"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">Alt</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">Ctrl</div>

                    </div><br style="clear: left">
                    <h3 style="clear:left">QWERTY US : Shifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">~</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">!</div>
                        <div class="keytext">!</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">@</div>
                        <div class="keytext">@</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">#</div>
                        <div class="keytext">#</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">$</div>
                        <div class="keytext">$</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">%</div>
                        <div class="keytext">%</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">^</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">&amp;</div>
                        <div class="keytext">&amp;</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">*</div>
                        <div class="keytext">*</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">(</div>
                        <div class="keytext">(</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">)</div>
                        <div class="keytext">)</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">_</div>
                        <div class="keytext">◌̆</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">+</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">Backspace</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">Tab</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">Q</div>
                        <div class="keytext">Θ</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">W</div>
                        <div class="keytext">Ω</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">E</div>
                        <div class="keytext">Ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">R</div>
                        <div class="keytext">Ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">T</div>
                        <div class="keytext">Τ</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">Y</div>
                        <div class="keytext">Ψ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">U</div>
                        <div class="keytext">Υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">I</div>
                        <div class="keytext">Ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">O</div>
                        <div class="keytext">Ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">P</div>
                        <div class="keytext">Π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">{</div>
                        <div class="keytext">{</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">}</div>
                        <div class="keytext">}</div>
                    </div>
                    <div class="key plain" id="K_BKSLASH">
                        <div class="keycap">¦</div>
                        <div class="keytext">◌ͅ</div>
                    </div><br style="clear: left">

                    <div class="key special" id="K_CAPS">
                        <div class="keycap">Caps Lock</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">A</div>
                        <div class="keytext">Α</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">S</div>
                        <div class="keytext">Σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">D</div>
                        <div class="keytext">Δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">F</div>
                        <div class="keytext">Φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">G</div>
                        <div class="keytext">Γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">H</div>
                        <div class="keytext">Η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">J</div>
                        <div class="keytext">◌̔</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">K</div>
                        <div class="keytext">Κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">L</div>
                        <div class="keytext">Λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">:</div>
                        <div class="keytext">·</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">"</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key special" id="K_ENTER">
                        <div class="keycap">Enter</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_SHIFTL">
                        <div class="keycap">Shift</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">Z</div>
                        <div class="keytext">Ζ</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">X</div>
                        <div class="keytext">Χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">C</div>
                        <div class="keytext">Ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">V</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">B</div>
                        <div class="keytext">Β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">N</div>
                        <div class="keytext">Ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">M</div>
                        <div class="keytext">Μ</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">&lt;</div>
                        <div class="keytext">&lt;</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">&gt;</div>
                        <div class="keytext">&gt;</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">?</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">Shift</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">Ctrl</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">Alt</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">Alt</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">Ctrl</div>
                    </div>

                    <br style="clear: left" />
                </div>
                <!--End of QWERTY US tabsheet-->


                <div class='osk_tabsheet' id='osk_uk_tabsheet'>
                    <h3 style="clear:left">QWERTY UK : Unshifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">`</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">1</div>
                        <div class="keytext">1</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">2</div>
                        <div class="keytext">2</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">3</div>
                        <div class="keytext">3</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">4</div>
                        <div class="keytext">4</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">5</div>
                        <div class="keytext">5</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">6</div>
                        <div class="keytext">6</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">7</div>
                        <div class="keytext">7</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">8</div>
                        <div class="keytext">8</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">9</div>
                        <div class="keytext">9</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">0</div>
                        <div class="keytext">0</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">-</div>
                        <div class="keytext">◌̄</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">=</div>
                        <div class="keytext LTN">‹LTN›</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">Backspace</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">Tab</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">q</div>
                        <div class="keytext">θ</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">w</div>
                        <div class="keytext">ω</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">e</div>
                        <div class="keytext">ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">r</div>
                        <div class="keytext">ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">t</div>
                        <div class="keytext">τ</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">y</div>
                        <div class="keytext">ψ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">u</div>
                        <div class="keytext">υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">i</div>
                        <div class="keytext">ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">o</div>
                        <div class="keytext">ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">p</div>
                        <div class="keytext">π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">[</div>
                        <div class="keytext">◌̔</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">]</div>
                        <div class="keytext">◌̓</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU1">
                        <div class="keycap">Enter</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_CAPS">
                        <div class="keycap">Caps Lock</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">a</div>
                        <div class="keytext">α</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">s</div>
                        <div class="keytext">σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">d</div>
                        <div class="keytext">δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">f</div>
                        <div class="keytext">φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">g</div>
                        <div class="keytext">γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">h</div>
                        <div class="keytext">η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">j</div>
                        <div class="keytext">◌̓</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">k</div>
                        <div class="keytext">κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">l</div>
                        <div class="keytext">λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">;</div>
                        <div class="keytext">;</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">'</div>
                        <div class="keytext">ς</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">#</div>
                        <div class="keytext">#</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU2">
                        <div class="keycap"></div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL-EU">
                        <div class="keycap">Shift</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">\</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">z</div>
                        <div class="keytext">ζ</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">x</div>
                        <div class="keytext">χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">c</div>
                        <div class="keytext">ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">v</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">b</div>
                        <div class="keytext">β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">n</div>
                        <div class="keytext">ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">m</div>
                        <div class="keytext">μ</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">,</div>
                        <div class="keytext">,</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">.</div>
                        <div class="keytext">.</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">/</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">Shift</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">Ctrl</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">Alt</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                        <div class="keytext"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">Alt</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">Ctrl</div>

                    </div><br style="clear: left">
                    <h3 style="clear:left">QWERTY UK : Shifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">¬</div>
                        <div class="keytext">¬</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">!</div>
                        <div class="keytext">!</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">"</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">£</div>
                        <div class="keytext">£</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">$</div>
                        <div class="keytext">$</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">%</div>
                        <div class="keytext">%</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">^</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">&amp;</div>
                        <div class="keytext">&amp;</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">*</div>
                        <div class="keytext">*</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">(</div>
                        <div class="keytext">(</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">)</div>
                        <div class="keytext">)</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">_</div>
                        <div class="keytext">◌̆</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">+</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">Backspace</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">Tab</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">Q</div>
                        <div class="keytext">Θ</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">W</div>
                        <div class="keytext">Ω</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">E</div>
                        <div class="keytext">Ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">R</div>
                        <div class="keytext">Ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">T</div>
                        <div class="keytext">Τ</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">Y</div>
                        <div class="keytext">Ψ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">U</div>
                        <div class="keytext">Υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">I</div>
                        <div class="keytext">Ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">O</div>
                        <div class="keytext">Ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">P</div>
                        <div class="keytext">Π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">{</div>
                        <div class="keytext">{</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">}</div>
                        <div class="keytext">}</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU1">
                        <div class="keycap">Enter</div>
                    </div>
                    <br style="clear: left">

                    <div class="key special" id="K_CAPS">
                        <div class="keycap">Caps Lock</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">A</div>
                        <div class="keytext">Α</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">S</div>
                        <div class="keytext">Σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">D</div>
                        <div class="keytext">Δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">F</div>
                        <div class="keytext">Φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">G</div>
                        <div class="keytext">Γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">H</div>
                        <div class="keytext">Η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">J</div>
                        <div class="keytext">◌̔</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">K</div>
                        <div class="keytext">Κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">L</div>
                        <div class="keytext">Λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">:</div>
                        <div class="keytext">·</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">@</div>
                        <div class="keytext">@</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">~</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU2">
                        <div class="keycap"></div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL-EU">
                        <div class="keycap">Shift</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">¦</div>
                        <div class="keytext">◌ͅ</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">Z</div>
                        <div class="keytext">Ζ</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">X</div>
                        <div class="keytext">Χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">C</div>
                        <div class="keytext">Ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">V</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">B</div>
                        <div class="keytext">Β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">N</div>
                        <div class="keytext">Ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">M</div>
                        <div class="keytext">Μ</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">&lt;</div>
                        <div class="keytext">&lt;</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">&gt;</div>
                        <div class="keytext">&gt;</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">?</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">Shift</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">Ctrl</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">Alt</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">Alt</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">Ctrl</div>
                    </div>

                    <br style="clear: left" />
                </div>
                <!--End of QWERTY UK tabsheet-->



                <div class='osk_tabsheet' id='osk_fr_tabsheet'>
                    <h3 style="clear:left">AZERTY : Unshifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">²</div>
                        <div class="keytext">²</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">&amp;</div>
                        <div class="keytext">&amp;</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">é</div>
                        <div class="keytext">έ</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">"</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">'</div>
                        <div class="keytext">ς</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">(</div>
                        <div class="keytext">(</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">-</div>
                        <div class="keytext">◌̄</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">è</div>
                        <div class="keytext">ὲ</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">_</div>
                        <div class="keytext">◌̆</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">ç</div>
                        <div class="keytext">ς</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">à</div>
                        <div class="keytext">ὰ</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">)</div>
                        <div class="keytext">)</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">=</div>
                        <div class="keytext LTN">‹LTN›</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">RET.ARR</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">TAB</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">a</div>
                        <div class="keytext">α</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">z</div>
                        <div class="keytext">ζ</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">e</div>
                        <div class="keytext">ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">r</div>
                        <div class="keytext">ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">t</div>
                        <div class="keytext">τ</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">y</div>
                        <div class="keytext">ψ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">u</div>
                        <div class="keytext">υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">i</div>
                        <div class="keytext">ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">o</div>
                        <div class="keytext">ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">p</div>
                        <div class="keytext">π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">^</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">$</div>
                        <div class="keytext">$</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU1">
                        <div class="keycap">ENTREE</div>
                    </div>

                    <br style="clear: left">
                    <div class="key special" id="K_CAPS">
                        <div class="keycap">VERR.MAJ</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">q</div>
                        <div class="keytext">θ</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">s</div>
                        <div class="keytext">σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">d</div>
                        <div class="keytext">δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">f</div>
                        <div class="keytext">φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">g</div>
                        <div class="keytext">γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">h</div>
                        <div class="keytext">η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">j</div>
                        <div class="keytext">◌̓</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">k</div>
                        <div class="keytext">κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">l</div>
                        <div class="keytext">λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">m</div>
                        <div class="keytext">μ</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">ù</div>
                        <div class="keytext">ὺ</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">*</div>
                        <div class="keytext">*</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU2">
                        <div class="keycap"></div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL-EU">
                        <div class="keycap">MAJ</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">&lt;</div>
                        <div class="keytext">&lt;</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">w</div>
                        <div class="keytext">ω</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">x</div>
                        <div class="keytext">χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">c</div>
                        <div class="keytext">ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">v</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">b</div>
                        <div class="keytext">β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">n</div>
                        <div class="keytext">ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">,</div>
                        <div class="keytext">,</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">;</div>
                        <div class="keytext">;</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">:</div>
                        <div class="keytext">·</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">!</div>
                        <div class="keytext">!</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">MAJ</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">CTRL</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">ALT</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                        <div class="keytext"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">ALT<br/>DROITE</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">CTRL<br/>DROITE</div>
                    </div>

                    <br style="clear: left">

                    <h3 style="clear:left">AZERTY : Shifted</h3>
                    <div class="key special" id="K_BKQUOTE">
                        <div class="keycap"></div>
                        <div class="keytext"></div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">1</div>
                        <div class="keytext">1</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">2</div>
                        <div class="keytext">2</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">3</div>
                        <div class="keytext">3</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">4</div>
                        <div class="keytext">4</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">5</div>
                        <div class="keytext">5</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">6</div>
                        <div class="keytext">6</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">7</div>
                        <div class="keytext">7</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">8</div>
                        <div class="keytext">8</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">9</div>
                        <div class="keytext">9</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">0</div>
                        <div class="keytext">0</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">°</div>
                        <div class="keytext">°</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">+</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">RET.ARR</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">TAB</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">A</div>
                        <div class="keytext">Α</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">Z</div>
                        <div class="keytext">Ζ</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">E</div>
                        <div class="keytext">Ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">R</div>
                        <div class="keytext">Ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">T</div>
                        <div class="keytext">Τ</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">Y</div>
                        <div class="keytext">Ψ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">U</div>
                        <div class="keytext">Υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">I</div>
                        <div class="keytext">Ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">O</div>
                        <div class="keytext">Ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">P</div>
                        <div class="keytext">Π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">¨</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">£</div>
                        <div class="keytext">£</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU1">
                        <div class="keycap">ENTREE</div>
                    </div>

                    <br style="clear: left">
                    <div class="key special" id="K_CAPS">
                        <div class="keycap">VERR.MAJ</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">Q</div>
                        <div class="keytext">Θ</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">S</div>
                        <div class="keytext">Σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">D</div>
                        <div class="keytext">Δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">F</div>
                        <div class="keytext">Φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">G</div>
                        <div class="keytext">Γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">H</div>
                        <div class="keytext">Η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">J</div>
                        <div class="keytext">◌̔</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">K</div>
                        <div class="keytext">Κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">L</div>
                        <div class="keytext">Λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">M</div>
                        <div class="keytext">Μ</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">%</div>
                        <div class="keytext">%</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">µ</div>
                        <div class="keytext">μ</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU2">
                        <div class="keycap"></div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL-EU">
                        <div class="keycap">MAJ</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">&gt;</div>
                        <div class="keytext">&gt;</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">W</div>
                        <div class="keytext">Ω</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">X</div>
                        <div class="keytext">Χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">C</div>
                        <div class="keytext">Ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">V</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">B</div>
                        <div class="keytext">Β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">N</div>
                        <div class="keytext">Ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">?</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">.</div>
                        <div class="keytext">.</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">/</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">§</div>
                        <div class="keytext">◌ͅ</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">MAJ</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">CTRL</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">ALT</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                        <div class="keytext"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">ALT<br/>DROITE</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">CTRL<br/>DROITE</div>
                    </div>

                    <br style="clear: left" />
                </div>
                <!--End of AZERTY FR tabsheet-->


                <div class='osk_tabsheet' id='osk_de_tabsheet'>
                    <h3 style="clear:left">QWERTZ : Unshifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">^</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">1</div>
                        <div class="keytext">1</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">2</div>
                        <div class="keytext">2</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">3</div>
                        <div class="keytext">3</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">4</div>
                        <div class="keytext">4</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">5</div>
                        <div class="keytext">5</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">6</div>
                        <div class="keytext">6</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">7</div>
                        <div class="keytext">7</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">8</div>
                        <div class="keytext">8</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">9</div>
                        <div class="keytext">9</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">0</div>
                        <div class="keytext">0</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">ß</div>
                        <div class="keytext">ς</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">´</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">Rück</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">Tab</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">q</div>
                        <div class="keytext">θ</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">w</div>
                        <div class="keytext">ω</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">e</div>
                        <div class="keytext">ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">r</div>
                        <div class="keytext">ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">t</div>
                        <div class="keytext">τ</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">z</div>
                        <div class="keytext">ζ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">u</div>
                        <div class="keytext">υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">i</div>
                        <div class="keytext">ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">o</div>
                        <div class="keytext">ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">p</div>
                        <div class="keytext">π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">ü</div>
                        <div class="keytext">ϋ</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">+</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU1">
                        <div class="keycap">Eingabe</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_CAPS">
                        <div class="keycap">Feststell</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">a</div>
                        <div class="keytext">α</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">s</div>
                        <div class="keytext">σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">d</div>
                        <div class="keytext">δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">f</div>
                        <div class="keytext">φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">g</div>
                        <div class="keytext">γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">h</div>
                        <div class="keytext">η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">j</div>
                        <div class="keytext">◌̓</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">k</div>
                        <div class="keytext">κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">l</div>
                        <div class="keytext">λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">ö</div>
                        <div class="keytext">ω</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">ä</div>
                        <div class="keytext">η</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">#</div>
                        <div class="keytext">#</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU2">
                        <div class="keycap"></div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL-EU">
                        <div class="keycap" style='left:3px'>Umschalt</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">&lt;</div>
                        <div class="keytext">&lt;</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">y</div>
                        <div class="keytext">ψ</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">x</div>
                        <div class="keytext">χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">c</div>
                        <div class="keytext">ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">v</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">b</div>
                        <div class="keytext">β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">n</div>
                        <div class="keytext">ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">m</div>
                        <div class="keytext">μ</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">,</div>
                        <div class="keytext">,</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">.</div>
                        <div class="keytext">.</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">-</div>
                        <div class="keytext">◌̄</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">Umschalt</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">Strg</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">Alt</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                        <div class="keytext"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">Alt GR</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">Strg-Recht</div>

                    </div><br style="clear: left">
                    <h3 style="clear:left">QWERTZ : Shifted</h3>
                    <div class="key plain" id="K_BKQUOTE">
                        <div class="keycap">°</div>
                        <div class="keytext">°</div>
                    </div>
                    <div class="key plain" id="K_1">
                        <div class="keycap">!</div>
                        <div class="keytext">!</div>
                    </div>
                    <div class="key plain" id="K_2">
                        <div class="keycap">"</div>
                        <div class="keytext">◌͂</div>
                    </div>
                    <div class="key plain" id="K_3">
                        <div class="keycap">§</div>
                        <div class="keytext">◌ͅ</div>
                    </div>
                    <div class="key plain" id="K_4">
                        <div class="keycap">$</div>
                        <div class="keytext">$</div>
                    </div>
                    <div class="key plain" id="K_5">
                        <div class="keycap">%</div>
                        <div class="keytext">%</div>
                    </div>
                    <div class="key plain" id="K_6">
                        <div class="keycap">&amp;</div>
                        <div class="keytext">&amp;</div>
                    </div>
                    <div class="key plain" id="K_7">
                        <div class="keycap">/</div>
                        <div class="keytext">◌́</div>
                    </div>
                    <div class="key plain" id="K_8">
                        <div class="keycap">(</div>
                        <div class="keytext">(</div>
                    </div>
                    <div class="key plain" id="K_9">
                        <div class="keycap">)</div>
                        <div class="keytext">)</div>
                    </div>
                    <div class="key plain" id="K_0">
                        <div class="keycap">=</div>
                        <div class="keytext LTN">‹LTN›</div>
                    </div>
                    <div class="key plain" id="K_HYPHEN">
                        <div class="keycap">?</div>
                        <div class="keytext">◌̈</div>
                    </div>
                    <div class="key plain" id="K_EQUAL">
                        <div class="keycap">`</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key special" id="K_BKSP">
                        <div class="keycap">Rück</div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_TAB">
                        <div class="keycap">Tab</div>
                    </div>
                    <div class="key plain" id="K_Q">
                        <div class="keycap">Q</div>
                        <div class="keytext">Θ</div>
                    </div>
                    <div class="key plain" id="K_W">
                        <div class="keycap">W</div>
                        <div class="keytext">Ω</div>
                    </div>
                    <div class="key plain" id="K_E">
                        <div class="keycap">E</div>
                        <div class="keytext">Ε</div>
                    </div>
                    <div class="key plain" id="K_R">
                        <div class="keycap">R</div>
                        <div class="keytext">Ρ</div>
                    </div>
                    <div class="key plain" id="K_T">
                        <div class="keycap">T</div>
                        <div class="keytext">Τ</div>
                    </div>
                    <div class="key plain" id="K_Z">
                        <div class="keycap">Z</div>
                        <div class="keytext">Ζ</div>
                    </div>
                    <div class="key plain" id="K_U">
                        <div class="keycap">U</div>
                        <div class="keytext">Υ</div>
                    </div>
                    <div class="key plain" id="K_I">
                        <div class="keycap">I</div>
                        <div class="keytext">Ι</div>
                    </div>
                    <div class="key plain" id="K_O">
                        <div class="keycap">O</div>
                        <div class="keytext">Ο</div>
                    </div>
                    <div class="key plain" id="K_P">
                        <div class="keycap">P</div>
                        <div class="keytext">Π</div>
                    </div>
                    <div class="key plain" id="K_LBRKT">
                        <div class="keycap">Ü</div>
                        <div class="keytext">Ϋ</div>
                    </div>
                    <div class="key plain" id="K_RBRKT">
                        <div class="keycap">*</div>
                        <div class="keytext">*</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU1">
                        <div class="keycap">Eingabe</div>
                    </div>
                    <br style="clear: left">

                    <div class="key special" id="K_CAPS">
                        <div class="keycap">Feststell</div>
                    </div>
                    <div class="key plain" id="K_A">
                        <div class="keycap">A</div>
                        <div class="keytext">Α</div>
                    </div>
                    <div class="key plain" id="K_S">
                        <div class="keycap">S</div>
                        <div class="keytext">Σ</div>
                    </div>
                    <div class="key plain" id="K_D">
                        <div class="keycap">D</div>
                        <div class="keytext">Δ</div>
                    </div>
                    <div class="key plain" id="K_F">
                        <div class="keycap">F</div>
                        <div class="keytext">Φ</div>
                    </div>
                    <div class="key plain" id="K_G">
                        <div class="keycap">G</div>
                        <div class="keytext">Γ</div>
                    </div>
                    <div class="key plain" id="K_H">
                        <div class="keycap">H</div>
                        <div class="keytext">Η</div>
                    </div>
                    <div class="key plain" id="K_J">
                        <div class="keycap">J</div>
                        <div class="keytext">◌̔</div>
                    </div>
                    <div class="key plain" id="K_K">
                        <div class="keycap">K</div>
                        <div class="keytext">Κ</div>
                    </div>
                    <div class="key plain" id="K_L">
                        <div class="keycap">L</div>
                        <div class="keytext">Λ</div>
                    </div>
                    <div class="key plain" id="K_COLON">
                        <div class="keycap">Ö</div>
                        <div class="keytext">Ω</div>
                    </div>
                    <div class="key plain" id="K_QUOTE">
                        <div class="keycap">Ä</div>
                        <div class="keytext">Η</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">'</div>
                        <div class="keytext">ς</div>
                    </div>
                    <div class="key special" id="K_ENTER-EU2">
                        <div class="keycap"></div>
                    </div>
                    <br style="clear: left">
                    <div class="key special" id="K_SHIFTL-EU">
                        <div class="keycap" style='left:3px'>Umschalt</div>
                    </div>
                    <div class="key plain">
                        <div class="keycap">&gt;</div>
                        <div class="keytext">&gt;</div>
                    </div>
                    <div class="key plain" id="K_Y">
                        <div class="keycap">Y</div>
                        <div class="keytext">Ψ</div>
                    </div>
                    <div class="key plain" id="K_X">
                        <div class="keycap">X</div>
                        <div class="keytext">Χ</div>
                    </div>
                    <div class="key plain" id="K_C">
                        <div class="keycap">C</div>
                        <div class="keytext">Ξ</div>
                    </div>
                    <div class="key plain" id="K_V">
                        <div class="keycap">V</div>
                        <div class="keytext">◌̀</div>
                    </div>
                    <div class="key plain" id="K_B">
                        <div class="keycap">B</div>
                        <div class="keytext">Β</div>
                    </div>
                    <div class="key plain" id="K_N">
                        <div class="keycap">N</div>
                        <div class="keytext">Ν</div>
                    </div>
                    <div class="key plain" id="K_M">
                        <div class="keycap">M</div>
                        <div class="keytext">Μ</div>
                    </div>
                    <div class="key plain" id="K_COMMA">
                        <div class="keycap">;</div>
                        <div class="keytext">;</div>
                    </div>
                    <div class="key plain" id="K_PERIOD">
                        <div class="keycap">:</div>
                        <div class="keytext">·</div>
                    </div>
                    <div class="key plain" id="K_SLASH">
                        <div class="keycap">_</div>
                        <div class="keytext">◌̆</div>
                    </div>
                    <div class="key special" id="K_SHIFTR">
                        <div class="keycap">Umschalt</div>
                    </div><br style="clear: left">
                    <div class="key special" id="K_CTRLL">
                        <div class="keycap">Strg</div>
                    </div>
                    <div style="width: 30px; display: block; float: left;"> </div>
                    <div class="key special" id="K_ALTL">
                        <div class="keycap">Alt</div>
                    </div>
                    <div class="key plain" id="K_SPACE">
                        <div class="keycap"> </div>
                    </div>
                    <div class="key special" id="K_ALTR">
                        <div class="keycap">Alt Gr</div>
                    </div>
                    <div style="width: 54px; display: block; float: left;"> </div>
                    <div class="key special" id="K_CTRLR">
                        <div class="keycap">Strg-Recht</div>
                    </div>

                    <br style="clear: left" />
                </div>
                <!--End of QWERTZ tabsheet-->

            </div>
            <!--End of tabsheets-->
        </div>

        <div id='Quickstart'>
            <h2>Quickstart</h2>
            <p>This Keyman keyboard works intuitively with a Latin-letter hardware layout. You can find Greek letters on this keyboard by typing the equivalent Latin letter, most similar by sound or appearance. For example, type <span class='keys'>w</span>
                <span class='keys'>[</span><span class='keys'>~</span><span class='keys'>m</span><span class='keys'>e</span><span class='keys'>/</span><span class='keys'>g</span><span class='keys'>a</span> to get <span class='lang2'>ὧμέγα</span>.</p>

            <p>As you can see, accents and breathing marks are typed after the vowel. They can be typed in any order. For example, <span class='lang2'>ΰ</span> is typed <span class='keys'>u</span><span class='keys'>/</span><span class='keys'>+</span> or
                <span class='keys'>u</span><span class='keys'>+</span><span class='keys'>/</span>.</p>

            <p>When you type an accent by itself (or after a non-accentable letter), you will also get that accent. For example, typing <span class='keys'>/</span> by itself will give you <span class='lang2'>´</span> <b>not</b> <span class='lang2'>/</span>.
                To get the standard keystroke instead of the accent, type <span class='keys'>=</span> before the character. For example, to get <span class='lang2'>?</span> instead of <span class='lang2'>¨</span>, type <span class='keys'>=</span>
                <span class='keys'>?</span>.</p>

        </div>

        <div id="Examples">
            <h2>Examples</h2>

            <table cellspacing=4 style='border-style:solid; border-width:1px; border-color:#8080FF; background-color:#E0E0FF; padding:4px'>
                <col width=100 />
                <col width=185 />
                <col width=170 />
                <col width=355 />

                <tr style='color:#0000AF; font-weight:bold'>
                    <td>Language</td>
                    <td>Phrase</td>
                    <td>Meaning</td>
                    <td>Type the following keys</td>
                </tr>
                <tr style='color:#0000AF; font-weight:normal'>
                    <td>Greek (Monotonic)</td>
                    <td><span class='lang2'>εδακρυσεν ο Ιησους </span></td>
                    <td>"Jesus wept", John 11:35</td>
                    <td><span class='keys'>e</span><span class='keys'>d</span><span class='keys'>a</span><span class='keys'>k</span><span class='keys'>r</span><span class='keys'>u</span><span class='keys'>s</span><span class='keys'>e</span><span class='keys'>n</span>
                        <span class='keys'>Space</span><span class='keys'>o</span><span class='keys'>Space</span><span class='keys'>I</span><span class='keys'>h</span><span class='keys'>s</span><span class='keys'>o</span><span class='keys'>u</span>
                        <span class='keys'>'</span>
                    </td>
                </tr>
                <tr style='color:#0000AF; font-weight:normal'>
                    <td>Greek (Polytonic)</td>
                    <td><span class='lang2'>ἐδάκρυσεν ὁ Ἰησοῦς </span></td>
                    <td>"Jesus wept", John 11:35</td>
                    <td><span class='keys'>e</span><span class='keys'>]</span><span class='keys'>d</span><span class='keys'>a</span><span class='keys'>k</span><span class='keys'>r</span><span class='keys'>u</span><span class='keys'>s</span><span class='keys'>e</span>
                        <span class='keys'>n</span><span class='keys'>Space</span><span class='keys'>o</span><span class='keys'>[</span><span class='keys'>Space</span><span class='keys'>I</span><span class='keys'>]</span><span class='keys'>h</span>
                        <span class='keys'>s</span>
                        <span class='keys'>o</span><span class='keys'>u</span><span class='keys'>~</span><span class='keys'>'</span></td>
                </tr>
            </table>

        </div>

        <div id="Documentation">
            <h2>Keyboard Details</h2>
            <h3>Letters</h3>
            <p>The Galaxie Greek Mnemonic keyboard uses an intuitive system where most of the Greek letters are matched to equivalent Latin letters, either by sound or appearance.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>w</span> produces <span class='lang2'>ω</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>u</span> produces <span class='lang2'>υ</span>.</p>

            <p>A few letters in Greek have no exact match in English, by sound or appearance. These have been assigned the remaining keys.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>q</span> produces <span class='lang2'>θ</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>c</span> produces <span class='lang2'>ξ</span>.</p>

            <p>When followed by a <span class='keys'>Space</span> or ending punctuation, sigma (<span class='lang2'>σ</span>) becomes final sigma (<span class='lang2'>ς</span>) automatically.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>s</span><span class='keys'>o</span><span class='keys'>s</span><span class='keys'>.</span> produces <span class='lang2'>σος.</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>s</span><span class='keys'>u</span><span class='keys'>s</span><span class='keys'>s</span><span class='keys'>w</span><span class='keys'>m</span><span class='keys'>o</span><span class='keys'>s</span>
                <span class='keys'>Space</span> produces <span class='lang2'>συσσωμος&nbsp;</span>.</p>

            <p>Final sigma can also be typed with the apostrophe key.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>s</span><span class='keys'>o</span><span class='keys'>'</span> produces <span class='lang2'>σος</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>s</span><span class='keys'>u</span><span class='keys'>s</span><span class='keys'>s</span><span class='keys'>w</span><span class='keys'>m</span><span class='keys'>o</span><span class='keys'>'</span>                produces <span class='lang2'>συσσωμος</span>.</p>

            <p>Capital letters are typed using shift as in English.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>Shift</span><b>+</b><span class='keys'>a</span> produces <span class='lang2'>Α</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>Shift</span><b>+</b><span class='keys'>w</span> produces <span class='lang2'>Ω</span>.</p>

            <p>To get the Latin keystroke for any key instead of the Greek, type <span class='keys'>=</span> first.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>=</span><span class='keys'>?</span> produces <span class='lang2'>?</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>=</span><span class='keys'>Q</span> produces <span class='lang2'>Q</span>.</p>

            <h3 class='break'>Breathing Marks, Accents, + Other Diacritics</h3>
            <p>The Galaxie Greek keyboard includes the following breathing marks, accents, and other diacritics. </p>

            <table class='grid' style='margin-left:40px'>
                <col class='char' />
                <col class='kbd' />
                <col class='name' />
                <col class='name' />
                <thead>
                    <tr style='text-align:center; font-weight:bold'>
                        <th>Character</th>
                        <th>Keys</th>
                        <th>English Name</th>
                        <th>Greek Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌̔</td>
                        <td><span class='keys'>J</span><b>&nbsp;or&nbsp;</b><span class='keys'>[</span></td>
                        <td>rough breathing</td>
                        <td>dasia</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌̓</td>
                        <td><span class='keys'>j</span><b>&nbsp;or&nbsp;</b><span class='keys'>]</span></td>
                        <td>smooth breathing</td>
                        <td>psili</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌̀</td>
                        <td><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                        <td>grave accent</td>
                        <td>varia</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌́</td>
                        <td><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                        <td>acute accent</td>
                        <td>oxia</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌͂</td>
                        <td><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
                        <td>circumflex accent</td>
                        <td>perispomeni</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌ͅ</td>
                        <td><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                        <td>iota subscript</td>
                        <td>ypogegrammeni/ <br/> prosgegrammeni</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌̈</td>
                        <td><span class='keys'>+</span><b>,&nbsp;</b><span class='keys'>?</span><b>&nbsp;or&nbsp;</b><span class='keys'>¨</span></td>
                        <td>diaeresis</td>
                        <td>dialytika</td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌̄</td>
                        <td><span class='keys'>-</span></td>
                        <td>macron</td>
                        <td></td>
                    </tr>
                    <tr style='text-align:center'>
                        <td class='lang2' style='font-size:24pt'>◌̆</td>
                        <td><span class='keys'>_</span></td>
                        <td>breve</td>
                        <td>vrachy</td>
                    </tr>
                </tbody>
            </table>

            <p>Diacritics are typed after the vowel. They can be typed in any order.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>u</span><span class='keys'>/</span><span class='keys'>+</span> or <span class='keys'>u</span><span class='keys'>+</span><span class='keys'>/</span> produces <span class='lang2'>ΰ</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>a</span><span class='keys'>"</span><span class='keys'>]</span><span class='keys'>¦</span> or <span class='keys'>a</span><span class='keys'>"</span><span class='keys'>¦</span><span class='keys'>]</span>                or <span class='keys'>a</span><span class='keys'>]</span><span class='keys'>¦</span><span class='keys'>"</span> or <span class='keys'>a</span><span class='keys'>]</span><span class='keys'>"</span><span class='keys'>¦</span> or <span class='keys'>a</span>
                <span class='keys'>¦</span><span class='keys'>"</span><span class='keys'>]</span> or <span class='keys'>a</span><span class='keys'>¦</span><span class='keys'>]</span><span class='keys'>"</span> produces <span class='lang2'>ᾆ</span>.</p>

            <p class='break'>The only exception to this rule is the circumflex on capital Greek letters. It cannot be typed first because a capital Greek letter cannot take a circumflex without a breathing mark.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>W</span><span class='keys'>J</span><span class='keys'>~</span> produces <span class='lang2'>Ὧ</span>. Typing circumflex first will not produce <span class='lang2'>Ὧ</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>A</span><span class='keys'>]</span><span class='keys'>¦</span><span class='keys'>"</span> or <span class='keys'>A</span><span class='keys'>]</span><span class='keys'>"</span><span class='keys'>¦</span>                or <span class='keys'>A</span><span class='keys'>¦</span><span class='keys'>]</span><span class='keys'>"</span> produces <span class='lang2'>ᾎ</span>. Typing circumflex before the breathing mark will not produce <span class='lang2'>ᾎ</span>.</p>

            <p>Rho (<span class='lang2'>ρ</span>) can also take the rough and smooth breathing mark.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>r</span><span class='keys'>]</span> produces <span class='lang2'>ῤ</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>R</span><span class='keys'>[</span> produces <span class='lang2'>Ῥ</span>.</p>

            <p>Typing a diacritic twice while editing lets you remove the diacritic from a letter.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>o</span><span class='keys'>]</span><span class='keys'>]</span> produces <span class='lang2'>ο</span> <b><u>not</u></b> <span class='lang2'>ὀ᾿</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>h</span><span class='keys'>[</span><span class='keys'>/</span><span class='keys'>¦</span><span class='keys'>/</span> produces <span class='lang2'>ᾑ</span> <b><u>not</u></b> <span class='lang2'>ᾕ´</span>.</p>

            <p>If you type a diacritic by itself or after any letter which cannot take that diacritic, you will get the diacritic by itself.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>/</span> produces <span class='lang2'>´</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>g</span><span class='keys'>?</span><span class='keys'>d</span> produces <span class='lang2'>γ¨δ</span>.</p>

            <p>On European hardware layouts where <span class='keys'>`</span>,<span class='keys'>´</span>,<span class='keys'>^</span>,<span class='keys'>~</span>, and/or <span class='keys'>¨</span> already function as deadkeys, you'll need to type a
                <span class='keys'>Space</span> after just those diacritics in order to get the diacritic.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>i</span><span class='keys'>¨</span><span class='keys'>Space</span> on a Spanish QWERTY keyboard produces <span class='lang2'>ϊ</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>w</span><span class='keys'>~</span><span class='keys'>Space</span> on a Dutch QWERTY keyboard produces <span class='lang2'>ῶ</span>.</p>

            <h3>Punctuation</h3>
            <p>Most punctuation on the Galaxie Greek keyboard is typed exactly as on your Latin-letter keyboard, though sometimes you will need to use the 'standard keystroke' rule above to get the punctuation you need.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>.</span> produces <span class='lang2'>.</span>.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>;</span> produces <span class='lang2'>;</span>.</p>

            <p>The Greek semicolon or <i>ano teleia</i> is the only exception.</p>
            <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>:</span> produces <span class='lang2'>·</span>.</p>


        </div>


        <div id="Technical">
            <h2>Technical Information</h2>
            <h3>System Requirements</h3>
            <p>It is recommended that you use one of the following hardware layouts with this Keyman keyboard:</p>
            <ul class='columns'>
                <li>AZERTY French</li>
                <li>QWERTY Dutch</li>
                <li>QWERTY Italian</li>
                <li>QWERTY Norwegian</li>
                <li>QWERTY Spanish</li>
                <li>QWERTY Swedish</li>
                <li>QWERTY UK</li>
                <li>QWERTY US</li>
                <li>QWERTZ German</li>
            </ul>

            <h3>Unicode Version</h3>
            <p>This keyboard complies with Unicode 6.0</p>

        </div>

        <div id="Author">
            <h3>Keyboard Authorship</h3>
            <p>
                This keyboard was created by Hampton Keathley of Galaxie Software. SIL International graciously acknowledges the contribution made by the author in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. His
                effort has assisted greatly in enabling people to communicate in Koine Greek.
            </p>

            <p>
                Version 3.1 released 24 May 2012. Added to Hebrew keyboard Latin output and Ctrl+Space (to prevent word-final form). Amended Hebrew help.<br/> Version 3.0 released 23 August 2011. Optimised for multiple European hardware layouts.<br/>                Version 2.1 released 15 December 2009. Full Greek documentation.<br /> Version 2.02 released 11 April 2008. Fixed Greek: rho + dasia and rho + psili with [ and ] keys.<br /> Version 2.0 for Keyman Desktop 7.0. Released 24 October 2007
            </p>

        </div>
        <div id="Copyright" class='break'>
            <h3>Copyright</h3>
            <p>
                The Galaxie BibleScript Greek keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2011-2018 Galaxie Greek and SIL International. It is released under the MIT license.
            </p>



        </div>

    </div>
