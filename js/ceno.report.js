
ceno.report = {

    init: function() {
        $(document).ready(function() {
            $("#report").click(function() {
                var reportData = ceno.report.buildData($("#title").val(), $("#descr").val());

                $.ajax({
                    url: "http://localhost:8888/ushahidi/api",
                    data: JSON.stringify(reportData),
                    context: document.body,
                    type: "POST",
                    //contentType: 'application/json',
                    contentType: 'multipart/form-data',
                    async: false,
                    success: function (data) {
                        alert("report submitted");
                    }
                });
            });
        });
    },

    buildData: function(title, descr) {
        return {
            task:"report",
            incident_title: title,
            incident_description: descr,
            incident_date:"11/11/2011",
            incident_hour:"10",
            incident_minute:"10",
            incident_ampm:"pm",
            incident_category:"1",  // can be comma sep, several categories, presuming IDs
            latitude:"44",
            longitude:"44",
            location_name:"city"
        };
    }

};