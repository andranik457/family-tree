<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>

<script>
    google.charts.load('current', {packages:["orgchart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
            [
                {v:'Margar', f:'Margar<div style="color:red; font-style:italic">1828 - ?<br>Khoy</div>'},
                '', ''
            ],
            [
                {v:'Baghdasar', f:'Baghdasar<div style="color:red; font-style:italic">? - ?<br>Khoy</div>'},
                '', ''
            ],
            ['Ohan', 'Margar', ''],
            ['Avetis', 'Margar', ''],
            ['Vardan', 'Ohan', ''],
            ['Harutyn', 'Ohan', ''],
            ['Yervand', 'Ohan', ''],
            [
                {
                    v: 'Ruben', f:'Ruben<div style="color:red; font-style:italic">1908 - 1975</div>'
                }, 'Vardan', ''
            ],
            [
                {
                    v: 'Hamo', f:'Hamo<div style="color:red; font-style:italic">1947 <br>-<br> 2004</div>'
                }, 'Ruben', ''
            ],
            [
                {
                    v: 'Araik', f:'Araik<div style="color:red; font-style:italic"></div>'
                }, 'Hamo', ''
            ],
            [
                {
                    v: 'Edo', f:'Edo<div style="color:red; font-style:italic">Anham gyada</div>'
                }, 'Hamo', ''
            ],
            [
                {
                    v: 'Abo', f:'Abo<div style="color:red; font-style:italic">1948 - 1998</div>'
                }, 'Ruben', ''
            ],
            [
                {
                    v: 'Armen', f:'Armen<div style="color:red; font-style:italic">1976</div>'
                }, 'Abo', ''
            ],
            [
                {
                    v: 'Arsen', f:'Arsen<div style="color:red; font-style:italic">1976 - 2015</div>'
                }, 'Abo', ''
            ],
            [
                {
                    v: 'Ruben1', f:'Ruben<div style="color:red; font-style:italic">1983</div>'
                }, 'Abo', ''
            ],
            [
                {
                    v: 'Zorik', f:'Zorik<div style="color:red; font-style:italic">1960</div>'
                }, 'Ruben', ''
            ],
            [
                {
                    v: 'Qnarik', f:'Qnarik<div style="color:red; font-style:italic"></div>'
                }, 'Zorik', ''
            ],
            [
                {
                    v: 'Hasiko ?', f:'Hasiko ?<div style="color:red; font-style:italic"></div>'
                }, 'Zorik', ''
            ],
            [
                {
                    v: 'Andrush', f:'Andrush<div style="color:red; font-style:italic">1931 <br>-<br> 2018</div>'
                }, 'Vardan', ''
            ],
            [
                {
                    v: 'Gagik', f:'Gagik<div style="color:red; font-style:italic">1957</div>'
                }, 'Andrush', ''
            ],
            [
                {
                    v: 'Davit', f:'David<div style="color:red; font-style:italic">1987</div>'
                }, 'Gagik', ''
            ],
            [
                {
                    v: 'Mishel', f:'Mishel<div style="color:red; font-style:italic">2017</div>'
                }, 'Davit', ''
            ],
            [
                {
                    v: 'Andranik', f:'Andranik<div style="color:red; font-style:italic">1990</div>'
                }, 'Gagik', ''
            ],
            [
                {
                    v: 'Anahit', f:'Anahit<div style="color:red; font-style:italic">1962 - 1987</div>'
                }, 'Andrush', ''
            ],
            [
                {
                    v: 'ArturAndrush', f:'Artur<div style="color:red; font-style:italic">1963</div>'
                }, 'Andrush', ''
            ],
            [
                {
                    v: 'Ani', f:'Ani<div style="color:red; font-style:italic">1994</div>'
                }, 'ArturAndrush', ''
            ],
            [
                {
                    v: 'Hovhanes', f:'Hovhanes<div style="color:red; font-style:italic">1997</div>'
                }, 'ArturAndrush', ''
            ],
            [
                {
                    v: 'Artak', f:'Artak<div style="color:red; font-style:italic">1965</div>'
                }, 'Andrush', ''
            ],
            [
                {
                    v: 'ArsenArtak', f:'Arsen<div style="color:red; font-style:italic">1998</div>'
                }, 'Artak', ''
            ],
            [
                {
                    v: 'Angela', f:'Angela<div style="color:red; font-style:italic">1999</div>'
                }, 'Artak', ''
            ],
            [
                {
                    v: 'Liparit', f:'Liparit<div style="color:red; font-style:italic">1914 <br>-<br> 1991</div>'
                }, 'Harutyn', ''
            ],
            [
                {
                    v: 'Zaven', f:'Zaven<div style="color:red; font-style:italic">1925 <br>-<br> 1992</div>'
                }, 'Harutyn', ''
            ],
            [
                {
                    v: 'HovhanesZaven', f:'Hovhanes<div style="color:red; font-style:italic">1957 - 2007</div>'
                }, 'Zaven', ''
            ],
            [
                {
                    v: 'KarenHovhanesZaven', f:'Karen<div style="color:red; font-style:italic">198? - ?</div>'
                }, 'HovhanesZaven', ''
            ],
            [
                {
                    v: 'NarineZaven', f:'Narine<div style="color:red; font-style:italic">195?</div>'
                }, 'Zaven', ''
            ],
            [
                {
                    v: 'KarineZaven', f:'Karine<div style="color:red; font-style:italic">195?</div>'
                }, 'Zaven', ''
            ],
            [
                {
                    v: 'SurikZaven', f:'Surik<div style="color:red; font-style:italic">1931 <br>-<br> 1991</div>'
                }, 'Harutyn', ''
            ],
            [
                {
                    v: 'Pargev', f:'Pargev<div style="color:red; font-style:italic">1935 <br>-<br> 2007</div>'
                }, 'Yervand', ''
            ],
            [
                {
                    v: 'Yervand1', f:'Yervand<div style="color:red; font-style:italic">1965</div>'
                }, 'Pargev', ''
            ],
            [
                {
                    v: 'Taron', f:'Taron<div style="color:red; font-style:italic">19??</div>'
                }, 'Yervand1', ''
            ],
            [
                {
                    v: 'Pargev1', f:'Pargev<div style="color:red; font-style:italic">19??</div>'
                }, 'Yervand1', ''
            ],
            [
                {
                    v: 'Tigran', f:'Tigran<div style="color:red; font-style:italic">19??</div>'
                }, 'Yervand1', ''
            ],
            [
                {
                    v: 'Hayk', f:'Hayk<div style="color:red; font-style:italic">1966</div>'
                }, 'Pargev', ''
            ],
            [
                {
                    v: 'Jak', f:'Jak<div style="color:red; font-style:italic"></div>'
                }, 'Hayk', ''
            ],
            [
                {
                    v: 'Artur', f:'Artur<div style="color:red; font-style:italic">196?</div>'
                }, 'Pargev', ''
            ],
            [
                {
                    v: 'GeghamAvetis', f:'Gegham<div style="color:red; font-style:italic">19??</div>'
                }, 'Avetis', ''
            ],
            [
                {
                    v: 'GurgenGeghamAvetis', f:'Gurgen<div style="color:red; font-style:italic">1930 <br>-<br> 2015</div>'
                }, 'GeghamAvetis', ''
            ],
            [
                {
                    v: 'BabkenGeghamAvetis', f:'Babken<div style="color:red; font-style:italic">1930 <br>-<br> 20??</div>'
                }, 'GeghamAvetis', ''
            ],
            [
                {
                    v: 'HrachGeghamAvetis', f:'Hrach<div style="color:red; font-style:italic">1935 <br>-<br> 20??</div>'
                }, 'GeghamAvetis', ''
            ],
            [
                {
                    v: 'VazgenGeghamAvetis', f:'Vazgen<div style="color:red; font-style:italic">1948</div>'
                }, 'GeghamAvetis', ''
            ],
            [
                {
                    v: 'MargarGeghamAvetis', f:'Margar<div style="color:red; font-style:italic">1950</div>'
                }, 'GeghamAvetis', ''
            ],
            [
                {
                    v: 'AvetiseghamAvetis', f:'Avetis<div style="color:red; font-style:italic">1952</div>'
                }, 'GeghamAvetis', ''
            ],
            [
                {
                    v: 'NoroAvetis', f:'Noro<div style="color:red; font-style:italic">19??</div>'
                }, 'Avetis', ''
            ],
            [
                {
                    v: 'RafikNoroAvetis', f:'Rafik<div style="color:red; font-style:italic">19?? - ?</div>'
                }, 'NoroAvetis', ''
            ],
            [
                {
                    v: 'VardanRafikNoroAvetis', f:'Vardan<div style="color:red; font-style:italic">19??</div>'
                }, 'RafikNoroAvetis', ''
            ],
            [
                {
                    v: 'NoroRafikNoroAvetis', f:'Noro<div style="color:red; font-style:italic">19??</div>'
                }, 'RafikNoroAvetis', ''
            ],
            [
                {
                    v: 'RazmikNoroAvetis', f:'Razmik<div style="color:red; font-style:italic">19??</div>'
                }, 'NoroAvetis', ''
            ],
            [
                {
                    v: 'AramaisAvetis', f:'Aramais<div style="color:red; font-style:italic">19??</div>'
                }, 'Avetis', ''
            ],
            [
                {
                    v: 'AnahitAramaisAvetis', f:'Anahit<div style="color:red; font-style:italic">1949</div>'
                }, 'AramaisAvetis', ''
            ],
            [
                {
                    v: 'AghasAramaisAvetis', f:'Aghas<div style="color:red; font-style:italic">1951 <br>-<br> 2009</div>'
                }, 'AramaisAvetis', ''
            ],
            [
                {
                    v: 'AramAghasAramaisAvetis', f:'Aram<div style="color:red; font-style:italic">198?</div>'
                }, 'AghasAramaisAvetis', ''
            ],
            [
                {
                    v: 'ArturAghasAramaisAvetis', f:'Artur<div style="color:red; font-style:italic">198?</div>'
                }, 'AghasAramaisAvetis', ''
            ],
            [
                {
                    v: 'ShushanAramaisAvetis', f:'Shushan<div style="color:red; font-style:italic">1953</div>'
                }, 'AramaisAvetis', ''
            ],
            [
                {
                    v: 'LalaAramaisAvetis', f:'Lala<div style="color:red; font-style:italic">1958</div>'
                }, 'AramaisAvetis', ''
            ],
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
    }
</script>