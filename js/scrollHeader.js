$(function() { //jqueryを使うおまじない。
    $("#top").waypoint({// #kirikae を基準に下記を実行
      handler: function(direction) {

         $("#header").find('#subDesc').css('color', '#88BBC0');
         $("#header").find('#meiship').attr('src', 'http://localhost:8888/kawakamiSite/wp-content/themes/meiship/images/Header/headerLogoMeishipGreen.png');
         
         console.log("テストテスト");
      }
    });
});