$(document).foundation()

$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        randomize: "Boolean"
    });

    // ACCORDION
    var headers = ["H1", "H2", "H3", "H4", "H5", "H6"];

    $(".accordion").click(function(e) {
        var target = e.target,
            name = target.nodeName.toUpperCase();

        if ($.inArray(name, headers) > -1) {
            var subItem = $(target).next();

            //slideUp all elements (except target) at current depth or greater
            var depth = $(subItem).parents().length;
            var allAtDepth = $(".accordion p .accordion div").filter(function () {
                if($(this).parents().length >= depth && this !== subItem.get(0)) {
                    return true;
                }
            });
            $(allAtDepth).slideUp("fast");

            //slideToggle target content and adjust bottom border if necessary
            subItem.slideToggle("fast", function() {
                $(".accordion:visible:last").css("border-radius", "0 0 10px 10px");
            });
        }
    });

    //////////////////////////
    /// Chart.js by Andrew ///
    //////////////////////////
    console.log(Chart);
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'pie', /// type of chart
        data: {
            labels: ["Liberal", "Democratic", "Conservative", "Green"], /// chart label array
            datasets: [
                {
                    label: '# of Votes',
                    data: [60, 20, 10, 10], /// Data, # of votes
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    hoverBackgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
               }
           ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    //////////////////////
    /// Tabs by Andrew ///
    //////////////////////

    /// Tab callback function
    $('#').on('toggle', (event, tab) => {
        console.log(tab);
        console.log(event);
    })

    ////////////////////////////////////
    /// Voting System - LocalStorage ///
    ////////////////////////////////////
    let lCount = 0;
    let cCount = 0;
    let gCount = 0;
    let nCount = 0;

    function getStoredItem(name){
        return localStorage.getItem(name);
    }

    $('.vote').click(function(){
        $('.votePoints').show();
        myStorage = localStorage;
        
        // if this has liberal class
        if ($(this).hasClass('vote-liberal')){
            console.log('works');
            /// Add point when clicked
            lCount += 1;
            /// Prevent from revoting
            $(this).removeClass('vote-liberal');
        }
        // // if this has conservative class
        if ($(this).hasClass('vote-con')){
            console.log('con');
            cCount += 1;
            $(this).removeClass('vote-con');
        }
        // // if this has green class
        if ($(this).hasClass('vote-green')){
            gCount += 1;
            $(this).removeClass('vote-green');
        }
        // // if this has npd class
        if ($(this).hasClass('vote-ndp')){
            nCount += 1;
            $(this).removeClass('vote-ndp');
        }
        /// Save localstorage
        localStorage.setItem('liberalVote', lCount);
        localStorage.setItem('conVote', cCount);
        localStorage.setItem('greenVote', gCount);
        localStorage.setItem('ndpVote', nCount);

        console.log(getStoredItem('liberalVote'));
        console.log(cCount);

        /// display votes on page
        $('.points-liberal>p').text(getStoredItem('liberalVote'));
        $('.points-con>p').text(getStoredItem('conVote'));
        $('.points-green>p').text(getStoredItem('greenVote'));
        $('.points-ndp>p').text(getStoredItem('ndpVote'));
    });

    $(document).mouseup(function(e) {
        const container = $('.votePoints');
        if (!container.is(e.arget) && container.has(e.target).length ===0){
            container.hide();
        }
    });
});
