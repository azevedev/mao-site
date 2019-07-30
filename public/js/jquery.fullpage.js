/*
 *	created by zhangkai on 2016/10/10 
 */
;(function(global,$){
	'use strict';
	var Fullpage = (function(){
		function Fullpage (el,options) {
			this.$el = el;
			this.currIndex = 0;
			this.animating = false;
			this.init();
		}

		var utils = {
			throttle:function(callback,delayTime,maxTime){
				var timer = null;
				var prevTime = 0;

				return function(){
					var context = this;
					var argument = arguments;
					var currTime = Date.now();
					if(maxTime && currTime - prevTime >= maxTime){
						prevTime = currTime;
						callback.apply(context,argument);
					}else{
						if(timer) clearTimeout(timer);
						timer = setTimeout(function(){
							callback.apply(context,argument);
						},delayTime);
					}
				}
			}
		};

		Fullpage.prototype = {
			constructor:Fullpage,
			init:function(){
				this.initHTML();
				this.bindEvent();
			},
			initHTML:function(){
				this.$el.children().css({
					'height':'100vh',
					'transition':'all 0.7s',
					'-webkit-transition':'all 0.7s'
				});
			},
			bindEvent:function(){
				var that = this;
				var targetIndex;
				
			
				$(window).on('keydown', function(e){
					let up = 38;
					let down = 40;
					if(e.keyCode == up){
					   targetIndex = that.currIndex-1;
					}
					if(e.keyCode == down){
					   targetIndex = that.currIndex+1;
					}
					that.gotoTarget(targetIndex);
				});
				
			},
			
			gotoTarget:function(targetIndex){
				var children = this.$el.children();
				var that = this;
				var translateY;
				if(targetIndex > this.$el.children().length-1)
				   targetIndex = 0;
				if(this.animating || targetIndex<0 || targetIndex>this.$el.children().length-1) return;
				current = targetIndex;
				translateY= 'translateY(-'+targetIndex*100+'%)';
				this.animating = true;
				$(children[0]).on('transitionend', function callback() {
				
			        this.removeEventListener('transitionend', callback);
			        that.animating = false;
		        });
		        children.css({
					'transform':translateY,
					'-webkit-transform':translateY
				});	

				this.currIndex = targetIndex;
			}
		};

		return Fullpage;
	})();

	$.fn.fullpage = function(options){
		this.each(function(){
			new Fullpage($(this),options);
		});
		return this;
	};
})(this,this.jQuery);
