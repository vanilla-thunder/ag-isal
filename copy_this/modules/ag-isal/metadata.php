<?php
/**
 * Copyright (c) 2013 Aggrosoft GbR & Marat Bedoev
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
**/
$sMetadataVersion = '1.1';
$aModule = array(
    'id' => 'ag-isal',
    'title' => 'Infinite Scrolling Articlelists',
    'description' => '</td>
            <td rowspan="2" width="25" style="border-right: 1px solid #ddd;"></td>
            <td rowspan="2"><img src="../modules/ag-isal/picture.jpg"/><style>.saveButton { color: white; font-size: 150%; width: 100%; padding: 10px 0; font-weight: bold;} #module_activate {background: green;} #module_deactivate {background: darkred;}</style>
            </td>
        </tr>
        <tr>
            <td></td>
            <td valign="top">Die Artikelliste wird beim Erreichen des Seitenendes nachgeladen =&gt; <strong><a href="http://oxidtemplate.aggrosoft.de/Alles/" target="_blank">DEMO</a></strong><br/>Funktioniert bei Kategorien, Herstellern und Produktsuche.<hr/></td>
        </tr>
        <tr><td colspan="2">',
    'thumbnail' => 'spinner.gif',
    'version' => '1.0.0 from 2013-03-15',
    'author' => 'Aggrosoft GbR & Marat Bedoev',
    'url' => 'https://github.com/vanilla-thunder/ag-isal',
    'extend' => array(
        'oxviewconfig' => 'ag-isal/extend/oxviewconfig_isal'
    ),
    'blocks' => array(
        array('template' => 'layout/base.tpl', 'block' => 'base_js', 'file' => 'base_js.tpl')
    ),
);
