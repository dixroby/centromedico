let coviddata = '';

fetch('https://nepalcorona.info/api/v1/data/world')
    .then(response => {
        return response.json()
    })
    .then(covid => {
        //    console.log(covid);

        
        
        covid.forEach(data => {
            if(data.country != ''){
            coviddata += "<tr><td><b>" + data.country + "</b></td>";
            coviddata += "<td><b>" + ( new Intl.NumberFormat(["ban", "id"]).format(data.totalCases)) + "</b></td>";
            coviddata += "<td>" + data.newCases + "</td>";
            coviddata += "<td>" + data.totalDeaths + "</td>";
            coviddata += "<td>" + data.newDeaths + "</td>";
            coviddata += "<td>" + data.activeCases + "</td>";
            coviddata += "<td>" + data.totalRecovered + "</td>";
            coviddata += "<td>" + data.criticalCases + "</td></tr>";
            // console.log(coviddata);
            document.getElementById('coranavirus').innerHTML = coviddata;
        }
        })
        $(document).ready(function() { 
            $("#gfg").on("keyup", function() { 
                var value = $(this).val().toLowerCase(); 
                $("#coranavirus tr").filter(function() { 
                    $(this).toggle($(this).text() 
                    .toLowerCase().indexOf(value) > -1) 
                }); 
            }); 
        });
    })