
/*global window */
/*global XMLHttpRequest */
/*global ActiveXObject */
/*global document*/
/*global escape*/

var XMLHttpRequestObject = false;
var XMLHttpRequestObject2 = false;

if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

if (window.XMLHttpRequest) {
    XMLHttpRequestObject2 = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    XMLHttpRequestObject2 = new ActiveXObject("Microsoft.XMLHTTP");
}

var wynik = "";
var page = 0;
var pages = 0;


if (XMLHttpRequestObject) {
    XMLHttpRequestObject.open("GET", "skrypt.php");
    XMLHttpRequestObject.onreadystatechange = function () {
        "use strict";
        if (XMLHttpRequestObject.readyState === 4 && XMLHttpRequestObject.status === 200) {
            wynik = XMLHttpRequestObject.responseText;
            document.getElementById("lista").innerHTML = wynik;
        }
    };
}
XMLHttpRequestObject.send(null);


if (XMLHttpRequestObject2) {
    XMLHttpRequestObject2.open("GET", "skrypt.php?page=300");
    XMLHttpRequestObject2.onreadystatechange = function () {
        "use strict";
        if (XMLHttpRequestObject2.readyState === 4 && XMLHttpRequestObject2.status === 200) {
            wynik = XMLHttpRequestObject2.responseText;
            if (parseInt(wynik, 10)) {
                document.getElementById("noPages").value = Math.abs(parseInt(wynik, 10) + 1);
                document.getElementById("page").max = Math.abs(parseInt(wynik, 10) + 1);
                document.getElementById("noPages2").value = Math.abs(parseInt(wynik, 10) + 1);
                document.getElementById("page2").max = Math.abs(parseInt(wynik, 10) + 1);
            }
        }
    };
}
XMLHttpRequestObject2.send(null);



function wyslij() {
    "use strict";
    if (XMLHttpRequestObject) {


        document.getElementById("code").value = 0;

        var url = "skrypt.php?", urltemp = url;// + "&page=300";
        //var urltemp = url + "&page=300";

        url += "id=" + escape(document.forms.uploadForm.id.value);

        url += "&title=" + escape(document.forms.uploadForm.title.value);

        url += "&issn=" + escape(document.forms.uploadForm.issn.value);

        url += "&eissn=" + escape(document.forms.uploadForm.eissn.value);

        url += "&title2=" + escape(document.forms.uploadForm.title2.value);

        url += "&issn2=" + escape(document.forms.uploadForm.issn2.value);

        url += "&eissn2=" + escape(document.forms.uploadForm.eissn2.value);

        url += "&points=" + escape(document.forms.uploadForm.points.value);

        //url += "&points=" + escape(document.forms.uploadForm.points.value);

        if (document.getElementById("101").checked) {
            url += "&101=x";
        }

        if (document.getElementById("102").checked) {
            url += "&102=x";
        }

        if (document.getElementById("103").checked) {
            url += "&103=x";
        }

        if (document.getElementById("104").checked) {
            url += "&104=x";
        }

        if (document.getElementById("105").checked) {
            url += "&105=x";
        }

        if (document.getElementById("106").checked) {
            url += "&106=x";
        }

        if (document.getElementById("107").checked) {
            url += "&107=x";
        }

        if (document.getElementById("201").checked) {
            url += "&201=x";
        }

        if (document.getElementById("202").checked) {
            url += "&202=x";
        }

        if (document.getElementById("203").checked) {
            url += "&203=x";
        }

        if (document.getElementById("204").checked) {
            url += "&204=x";
        }

        if (document.getElementById("205").checked) {
            url += "&205=x";
        }

        if (document.getElementById("206").checked) {
            url += "&206=x";
        }

        if (document.getElementById("207").checked) {
            url += "&207=x";
        }

        if (document.getElementById("208").checked) {
            url += "&208=x";
        }

        if (document.getElementById("209").checked) {
            url += "&209=x";
        }

        if (document.getElementById("301").checked) {
            url += "&301=x";
        }

        if (document.getElementById("302").checked) {
            url += "&302=x";
        }

        if (document.getElementById("303").checked) {
            url += "&303=x";
        }

        if (document.getElementById("304").checked) {
            url += "&304=x";
        }

        if (document.getElementById("401").checked) {
            url += "&401=x";
        }

        if (document.getElementById("402").checked) {
            url += "&402=x";
        }

        if (document.getElementById("403").checked) {
            url += "&403=x";
        }

        if (document.getElementById("404").checked) {
            url += "&404=x";
        }

        if (document.getElementById("405").checked) {
            url += "&405=x";
        }

        if (document.getElementById("501").checked) {
            url += "&501=x";
        }

        if (document.getElementById("502").checked) {
            url += "&502=x";
        }

        if (document.getElementById("503").checked) {
            url += "&503=x";
        }

        if (document.getElementById("504").checked) {
            url += "&504=x";
        }

        if (document.getElementById("505").checked) {
            url += "&505=x";
        }

        if (document.getElementById("506").checked) {
            url += "&506=x";
        }

        if (document.getElementById("507").checked) {
            url += "&507=x";
        }

        if (document.getElementById("508").checked) {
            url += "&508=x";
        }

        if (document.getElementById("509").checked) {
            url += "&509=x";
        }

        if (document.getElementById("601").checked) {
            url += "&601=x";
        }

        if (document.getElementById("602").checked) {
            url += "&602=x";
        }

        if (document.getElementById("603").checked) {
            url += "&603=x";
        }

        if (document.getElementById("604").checked) {
            url += "&604=x";
        }

        if (document.getElementById("605").checked) {
            url += "&605=x";
        }

        if (document.getElementById("606").checked) {
            url += "&606=x";
        }

        if (document.getElementById("607").checked) {
            url += "&607=x";
        }

        if (document.getElementById("701").checked) {
            url += "&701=x";
        }

        //alert(url);
        urltemp = url + "&page=300";

        XMLHttpRequestObject2.open("GET", urltemp);


        XMLHttpRequestObject2.onreadystatechange = function () {
            if (XMLHttpRequestObject2.readyState === 4 &&
                    XMLHttpRequestObject2.status === 200) {

                wynik = XMLHttpRequestObject2.responseText;

                document.getElementById("noPages").value = Math.abs(parseInt(wynik, 10) + 1) % 293;
                document.getElementById("page").max = Math.abs(parseInt(wynik, 10) + 1) % 293;
                document.getElementById("noPages2").value = Math.abs(parseInt(wynik, 10) + 1) % 293;
                document.getElementById("page2").max = Math.abs(parseInt(wynik, 10) + 1) % 293;

            }
        };

        XMLHttpRequestObject2.send(null);

        page = escape(document.forms.uploadForm.page.value) - 1;

        if (page !== undefined) {
            url += "&page=" + page;
        }


        XMLHttpRequestObject.open("GET", url);


        XMLHttpRequestObject.onreadystatechange = function () {
            if (XMLHttpRequestObject.readyState === 4 &&
                    XMLHttpRequestObject.status === 200) {

                wynik = XMLHttpRequestObject.responseText;

                if (parseInt(wynik, 10)) {
                    document.getElementById("lista").innerHTML = "Brak wyników";
                } else {
                    document.getElementById("lista").innerHTML = wynik;
                }

            }
        };

        XMLHttpRequestObject.send(null);


    }
}

function dodaj() {
    "use strict";
    //wyslij();
    var page = escape(document.forms.uploadForm.page.value), max = escape(document.forms.uploadForm.noPages.value);
    /*document.getElementById("page").value = parseInt(page, 10) + 1;
    wyslij();*/

    //var max = escape(document.forms.uploadForm.noPages.value);
    if (parseInt(page, 10) < parseInt(max, 10)) {
        document.getElementById("page").value = parseInt(page, 10) + 1;
        document.getElementById("page2").value = parseInt(page, 10) + 1;
        wyslij();
    }
}

function odejmij() {
    "use strict";
    //wyslij();
    var page = escape(document.forms.uploadForm.page.value);
    if (page > 1) {
        document.getElementById("page").value = parseInt(page, 10) - 1;
        document.getElementById("page2").value = parseInt(page, 10) - 1;
    }
    wyslij();
}
