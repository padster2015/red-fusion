@extends('layouts.app')

@section('content')
    <div class="alert alert-warning alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Whoo hoo!</strong> Logged in and data is in :)
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->Business_name }} Charts</h3>  
    </div>

<section class="rankingSection">
        <div class="rankingItems">
            <div class="rankingItem fadeInDown rankingItem--global" data-view="WebsitePageModule.Views.RankingView" data-rank-subject="Global">
                

<div class="rankingItem-content">
    <span class="rankingItem-title"><i class="rankingItem-icon icon-geo"></i>Global Rank<i class="tooltip informationButton owMrkClick" original-title="Traffic rank of site, as compared to all other sites in the world"></i></span>
    <div itemprop="url" class="rankingItem-underTitle">
<a class="rankingItem-subTitle is-link" data-analytics-category="Internal Link" data-analytics-label="Global Rank/Worldwide" href="/global" itemprop="significantLink">Worldwide</a>            </div>
    <div class="rankingItem-rank js-editable">
                <span class="rankingItem-value js-countable" data-value="31,567">#31,567</span><i class="rankingItem-valueIcon rankingItem-valueIcon--increased icon-arrow-down-ranking rankingItem-valueIcon--is-shown"></i>
                    

    </div>
</div>
<div class="rankingItem-embed"></div>
            </div>
            <div class="rankingItem fadeInDown rankingItem--country" data-view="WebsitePageModule.Views.RankingView" data-rank-subject="Country">


                

<div class="rankingItem-content">
    <span class="rankingItem-title"><i class="rankingItem-icon icon-country-rank"></i>Country Rank<i class="tooltip informationButton owMrkClick" original-title="Traffic rank of site, as compared to all other sites in its leading country"></i></span>
    <div itemprop="url" class="rankingItem-underTitle">
<a class="rankingItem-subTitle is-link" href="/country/united_states" itemprop="significantLink" data-analytics-category="Internal Link" data-analytics-label="Country Rank/840">United States</a>            <i class="flag us"></i>            </div>
    <div class="rankingItem-rank js-editable">
                <span class="rankingItem-value js-countable" data-value="23,936">#23,936</span><i class="rankingItem-valueIcon rankingItem-valueIcon--increased icon-arrow-down-ranking rankingItem-valueIcon--is-shown"></i>
                    

    </div>
</div>
<div class="rankingItem-embed"></div>
            </div>
            <div class="rankingItem fadeInDown rankingItem--category" data-view="WebsitePageModule.Views.RankingView" data-rank-subject="Category">


                

<div class="rankingItem-content">
    <span class="rankingItem-title"><i class="rankingItem-icon categories-sprite small computer_and_electronics"></i>Category Rank<i class="tooltip informationButton owMrkClick" original-title="Traffic rank of site, as compared to all other sites in its main category"></i></span>
    <div itemprop="url" class="rankingItem-underTitle">
<a class="rankingItem-subTitle is-link" href="/category/computer_and_electronics" itemprop="significantLink" data-analytics-category="Internal Link" data-analytics-label="Category Rank/computer_and_electronics">Computer and Electronics</a>                    <a class="rankingItem-categoryEdit js-editCategory" data-options="{&quot;domain&quot;:&quot;Bootply.com&quot;,&quot;category&quot;: &quot;Computer_and_Electronics&quot;,&quot;categoryClass&quot;:&quot;&quot;,&quot;categoryLabel&quot;: &quot;Computer and Electronics&quot;}" itemprop="name">Edit</a>
    </div>
    <div class="rankingItem-rank js-editable">
                <span class="rankingItem-value js-countable" data-value="1,729">#1,729</span><i class="rankingItem-valueIcon rankingItem-valueIcon--increased icon-arrow-down-ranking rankingItem-valueIcon--is-shown"></i>
                    

    </div>
</div>
<div class="rankingItem-embed"></div>
            </div>
        </div>
    </section>



  </div><!--/row-->
  <hr>
  <div class="row">
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2500);
</script>

<script>
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'area'
        },
        title: {
            text: 'How Fit Awards is doing'
        },
      
        xAxis: {
            categories: ['01-01-2015', '01-03-2015', '01-06-2015', '01-09-2015', '01-10-2015', '01-11-2015', '31-12-2015'],
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Clicks'
            },
            labels: {
                formatter: function () {
                    return this.value / 100;
                }
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: ' millions'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }
            }
        },
        series: [{
            name: 'New Year - New You',
            data: [502, 635, 809, 947, 1402, 3634, 5268]
        }, {
            name: 'Spring into action',
            data: [106, 107, 111, 133, 221, 767, 1766]
        }, {
            name: 'Summer Sale',
            data: [163, 203, 276, 408, 547, 729, 628]
        }, {
            name: 'Cyber Monday',
            data: [18, 31, 54, 156, 339, 818, 1201]
        }, {
            name: 'Boxing Day Madness',
            data: [2, 2, 2, 6, 13, 30, 46]
        }]
    });
});

</script>
@endsection

