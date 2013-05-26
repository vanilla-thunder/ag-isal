<?php
/**
 * MIT Licence
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
    'description' => array(
        'de' =>'Die Artikelliste wird beim Erreichen des Seitenendes nachgeladen =&gt; <strong><a href="http://oxidtemplate.aggrosoft.de/Alles/" target="_blank">DEMO</a></strong><br/>Funktioniert bei Kategorien, Herstellern und Produktsuche.',
        'en' =>'loads next articles by reaching the end of the page =&gt; <strong><a href="http://oxidtemplate.aggrosoft.de/Alles/" target="_blank">DEMO</a></strong><br/>Works with categories, manufacturer pages and product search.'
    ),
    'thumbnail' => 'picture.jpg',
    'version' => '1.0.0 from 2013-03-15',
    'author' => 'Aggrosoft GbR & Marat Bedoev',
    'url' => 'https://github.com/vanilla-thunder/ag-isal',
    'extend' => array(
    ),
    'blocks' => array(
        array('template' => 'layout/base.tpl', 'block' => 'base_js', 'file' => '/views/blocks/base_js.tpl')
    ),
);
