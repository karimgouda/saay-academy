$(document).ready(function() {
  /*-------
    dynamically charts
  ------*/ 
  $(".chart").each(function() {
    var options = {
    series: [$(`#${this.id}`).data("percent")],
    chart: {
    height: 210,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      dataLabels: {
        name:{
          fontSize:"10",
          color:"#0F1525",
          fontWeight:900,
          fontFamily:"'Rajdhani', sans-serif",
        },
        value: {
          fontSize:"10",
          color:"#0F1525",
          fontWeight:900,
          fontFamily:"'Rajdhani', sans-serif",
        }
      },
      hollow: {
        size: '80%',
      }
    },
  },
  colors:["#20b7b9"],
  labels: [$(`#${this.id}`).data("title")],
  };
  var chart = new ApexCharts(this, options);
  chart.render();
  })


    /*------
    progress
  -------*/ 
  $(".ab-progress").progressBar({
    fill:"linear-gradient(to right,#20b7b9 0,#63BF85 100%)",
  });



  /*--------
    owlCarousel
  --------*/ 
  let flag = false;
  if(document.dir == "rtl" ) {
    flag = true;
  }
  $('.section-taps__content__carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    rtl:flag,
    autoplay:true,
    responsive:{
        0:{
            items:1
        }
    }
  })
  $('.solutions-services__carousel').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    rtl:flag,
    autoplay:true,
    responsive:{
        0:{
            items:2
        },
        700: {
          items:3
        },
        1000: {
          items:4
        }
    }
  })
  $('.gallery-services__carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    rtl:flag,
    autoplay:true,
    responsive:{
        0:{
            items:2
        },
        700: {
          items:3
        },
        1000: {
          items:4,
        }
    }
  })
})