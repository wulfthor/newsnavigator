<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>jQuery Search Autocomplete</title>
    <!-- jQuery libs 
    <style type="text/css" title="currentStyle">
                @import "css/themes/smoothness/jquery-ui-1.8.4.custom.css";
    </style>
-->

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js/jquery-ui-1.7.custom.min.js"></script>
    <script  type="text/javascript" src="js/jquery-search.js"></script>
    <script type="text/javascript" src="js/d3.v3.js"></script>
    <script type="text/javascript" src="js/mystuff.js"></script>

</head>
<body>

<div id="container">

    <div id="dataTable">

        <div class="ui-grid ui-widget ui-widget-content ui-corner-all">

            <div class="ui-grid-header ui-widget-header ui-corner-top clearfix">

                <div class="header-left">
                Search SMK: <input style="width:150px;" id="searchDataSMK" type="text">
        <LABEL FOR="SMKsearchtype" ACCESSKEY=U>SMKSearchtype</LABEL>
        <select id="SMKsearchtype">
            <option id="titlesw" name="titlesw" value="smkTitle_sw">title - starter med</option>
            <option id="titlecn" name="titlecn" value="smkTitle_cn">title - indeholder </option>
            <option id="titleis" name="titleis" value="smkTitle_is">title - identisk med</option>
            <option id="person" name="person" value="person">person</option>
            <option id="keyword" name="keyword" value="keyword_kw">keyword</option>
        </select>
        <LABEL FOR="SMKreturn" ACCESSKEY=R>SMK returntype</LABEL>
        <select id="SMKreturn">
            <option id="list" name="list" value="csid">list</option>
            <option id="listwimg" name="listwimg" value="listwimg">list with images</option>
        </select>
        <input TYPE=hidden id="tagnames" name="tagnames" value="csid">
        <input TYPE=hidden id="searchtype" name="searchtype" value="list">
        <input TYPE=text id="numofwords" name="numofwords" value="0">
                </div>

                <div class="header-right"> Search Europeana: <input style="width:150px;" id="searchDataEU" type="text">
            <LABEL FOR="EUsearchtype" ACCESSKEY=U>EUSearchtype</LABEL>
            <select id="EUsearchtype">
                <option id="query" name="query" value="search_query">Query</option>
                <option id="title" name="title" value="title">Title</option>
                <option id="subject" name="subject" value="subject">Subjects </option>
                <option id="creator" name="creator" value="creator">Creators</option>
                <option id="geo" name="geo" value="geo">person</option>
                <option id="img" name="img" value="img">Images</option>
                <option id="suggest" name="suggest" value="suggest">Suggest</option>
            </select>
            <LABEL FOR="EUreturn" ACCESSKEY=R>returntype</LABEL>
            <select id="EUreturn">
                <option id="list" name="list" value="list">list</option>
                <option id="listwimg" name="listwimg" value="listwimg">list with images</option>
            </select>
            <input TYPE=text id="numofwords" name="numofwords" value="0">
                </div>

            <table class="ui-grid-content ui-widget-content cStoreDataTable" id="cStoreDataTable">
                <thead>
                    <tr>
                        <th class="ui-state-default">Name</th>
                        <th class="ui-state-default">count</th>
                        <th class="ui-state-default">type</th>
                    </tr>
                </thead>
                <tbody id="results"></tbody>
            </table>
            <div class="ui-grid-footer ui-widget-header ui-corner-bottom">
                <div class="grid-results">Results </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
