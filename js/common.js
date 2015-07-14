//サイドバー
  $('.button-collapse').sideNav({
      menuWidth: 240, // デフォルトは240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );

  //スライダー
	$(document).ready(function(){
      $('.slider').slider({
		  full_width: true, //フルスクリーン表示
		  height: 300, //高さ　デフォルトは400
		  indicators: false, //スライダー下のナビゲーションを隠す デフォルトはtrue
		  transition: 400, //アニメーションの速さ　デフォルトは500
		  interval: 5000, //インターバル　デフォルトは6000（6秒）
		  });
    });

