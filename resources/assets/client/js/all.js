/*! Morphext - v2.4.4 - 2015-05-21 */
!function (e) {
    "use strict";

    function t(t, n) {
        this.element = e(t), this.settings = e.extend({}, r, n), this._defaults = r, this._init()
    }

    var n = "Morphext",
        r = {
            animation: "bounceIn",
            separator: ",",
            speed: 2e3,
            complete: e.noop
        };
    t.prototype = {
        _init: function () {
            var t = this;
            this.phrases = [], this.element.addClass("morphext"), e.each(this.element.text().split(this.settings.separator), function (n, r) {
                t.phrases.push(e.trim(r))
            }), this.index = -1, this.animate(), this.start()
        },
        animate: function () {
            this.index = ++this.index % this.phrases.length, this.element[0].innerHTML = '<span class="animated ' + this.settings.animation + '">' + this.phrases[this.index] + "</span>", e.isFunction(this.settings.complete) && this.settings.complete.call(this)
        },
        start: function () {
            var e = this;
            this._interval = setInterval(function () {
                e.animate()
            }, this.settings.speed)
        },
        stop: function () {
            this._interval = clearInterval(this._interval)
        }
    }, e.fn[n] = function (r) {
        return this.each(function () {
            e.data(this, "plugin_" + n) || e.data(this, "plugin_" + n, new t(this, r))
        })
    }
}(jQuery), !function (e) {
    var t = e(window);
    e.fn.visible = function (e, n, r) {
        if (!(this.length < 1)) {
            var i = this.length > 1 ? this.eq(0) : this,
                o = i.get(0),
                a = t.width(),
                s = t.height(),
                r = r ? r : "both",
                u = n === !0 ? o.offsetWidth * o.offsetHeight : !0;
            if ("function" == typeof o.getBoundingClientRect) {
                var l = o.getBoundingClientRect(),
                    c = l.top >= 0 && l.top < s,
                    f = l.bottom > 0 && l.bottom <= s,
                    d = l.left >= 0 && l.left < a,
                    p = l.right > 0 && l.right <= a,
                    h = e ? c || f : c && f,
                    m = e ? d || p : d && p;
                if ("both" === r) return u && h && m;
                if ("vertical" === r) return u && h;
                if ("horizontal" === r) return u && m
            } else {
                var g = t.scrollTop(),
                    v = g + s,
                    y = t.scrollLeft(),
                    b = y + a,
                    x = i.offset(),
                    w = x.top,
                    T = w + i.height(),
                    C = x.left,
                    E = C + i.width(),
                    N = e === !0 ? T : w,
                    k = e === !0 ? w : T,
                    S = e === !0 ? E : C,
                    j = e === !0 ? C : E;
                if ("both" === r) return !!u && v >= k && N >= g && b >= j && S >= y;
                if ("vertical" === r) return !!u && v >= k && N >= g;
                if ("horizontal" === r) return !!u && b >= j && S >= y
            }
        }
    }
}(jQuery), jQuery.easing.jswing = jQuery.easing.swing, jQuery.extend(jQuery.easing, {
    def: "easeOutQuad",
    swing: function (e, t, n, r, i) {
        return jQuery.easing[jQuery.easing.def](e, t, n, r, i)
    },
    easeInQuad: function (e, t, n, r, i) {
        return r * (t /= i) * t + n
    },
    easeOutQuad: function (e, t, n, r, i) {
        return -r * (t /= i) * (t - 2) + n
    },
    easeInOutQuad: function (e, t, n, r, i) {
        return (t /= i / 2) < 1 ? r / 2 * t * t + n : -r / 2 * (--t * (t - 2) - 1) + n
    },
    easeInCubic: function (e, t, n, r, i) {
        return r * (t /= i) * t * t + n
    },
    easeOutCubic: function (e, t, n, r, i) {
        return r * ((t = t / i - 1) * t * t + 1) + n
    },
    easeInOutCubic: function (e, t, n, r, i) {
        return (t /= i / 2) < 1 ? r / 2 * t * t * t + n : r / 2 * ((t -= 2) * t * t + 2) + n
    },
    easeInQuart: function (e, t, n, r, i) {
        return r * (t /= i) * t * t * t + n
    },
    easeOutQuart: function (e, t, n, r, i) {
        return -r * ((t = t / i - 1) * t * t * t - 1) + n
    },
    easeInOutQuart: function (e, t, n, r, i) {
        return (t /= i / 2) < 1 ? r / 2 * t * t * t * t + n : -r / 2 * ((t -= 2) * t * t * t - 2) + n
    },
    easeInQuint: function (e, t, n, r, i) {
        return r * (t /= i) * t * t * t * t + n
    },
    easeOutQuint: function (e, t, n, r, i) {
        return r * ((t = t / i - 1) * t * t * t * t + 1) + n
    },
    easeInOutQuint: function (e, t, n, r, i) {
        return (t /= i / 2) < 1 ? r / 2 * t * t * t * t * t + n : r / 2 * ((t -= 2) * t * t * t * t + 2) + n
    },
    easeInSine: function (e, t, n, r, i) {
        return -r * Math.cos(t / i * (Math.PI / 2)) + r + n
    },
    easeOutSine: function (e, t, n, r, i) {
        return r * Math.sin(t / i * (Math.PI / 2)) + n
    },
    easeInOutSine: function (e, t, n, r, i) {
        return -r / 2 * (Math.cos(Math.PI * t / i) - 1) + n
    },
    easeInExpo: function (e, t, n, r, i) {
        return 0 == t ? n : r * Math.pow(2, 10 * (t / i - 1)) + n
    },
    easeOutExpo: function (e, t, n, r, i) {
        return t == i ? n + r : r * (-Math.pow(2, -10 * t / i) + 1) + n
    },
    easeInOutExpo: function (e, t, n, r, i) {
        return 0 == t ? n : t == i ? n + r : (t /= i / 2) < 1 ? r / 2 * Math.pow(2, 10 * (t - 1)) + n : r / 2 * (-Math.pow(2, -10 * --t) + 2) + n
    },
    easeInCirc: function (e, t, n, r, i) {
        return -r * (Math.sqrt(1 - (t /= i) * t) - 1) + n
    },
    easeOutCirc: function (e, t, n, r, i) {
        return r * Math.sqrt(1 - (t = t / i - 1) * t) + n
    },
    easeInOutCirc: function (e, t, n, r, i) {
        return (t /= i / 2) < 1 ? -r / 2 * (Math.sqrt(1 - t * t) - 1) + n : r / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + n
    },
    easeInElastic: function (e, t, n, r, i) {
        var o = 1.70158,
            a = 0,
            s = r;
        if (0 == t) return n;
        if (1 == (t /= i)) return n + r;
        if (a || (a = .3 * i), s < Math.abs(r)) {
            s = r;
            var o = a / 4
        } else var o = a / (2 * Math.PI) * Math.asin(r / s);
        return -(s * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (t * i - o) * Math.PI / a)) + n
    },
    easeOutElastic: function (e, t, n, r, i) {
        var o = 1.70158,
            a = 0,
            s = r;
        if (0 == t) return n;
        if (1 == (t /= i)) return n + r;
        if (a || (a = .3 * i), s < Math.abs(r)) {
            s = r;
            var o = a / 4
        } else var o = a / (2 * Math.PI) * Math.asin(r / s);
        return s * Math.pow(2, -10 * t) * Math.sin(2 * (t * i - o) * Math.PI / a) + r + n
    },
    easeInOutElastic: function (e, t, n, r, i) {
        var o = 1.70158,
            a = 0,
            s = r;
        if (0 == t) return n;
        if (2 == (t /= i / 2)) return n + r;
        if (a || (a = .3 * i * 1.5), s < Math.abs(r)) {
            s = r;
            var o = a / 4
        } else var o = a / (2 * Math.PI) * Math.asin(r / s);
        return 1 > t ? -.5 * s * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (t * i - o) * Math.PI / a) + n : s * Math.pow(2, -10 * (t -= 1)) * Math.sin(2 * (t * i - o) * Math.PI / a) * .5 + r + n
    },
    easeInBack: function (e, t, n, r, i, o) {
        return void 0 == o && (o = 1.70158), r * (t /= i) * t * ((o + 1) * t - o) + n
    },
    easeOutBack: function (e, t, n, r, i, o) {
        return void 0 == o && (o = 1.70158), r * ((t = t / i - 1) * t * ((o + 1) * t + o) + 1) + n
    },
    easeInOutBack: function (e, t, n, r, i, o) {
        return void 0 == o && (o = 1.70158), (t /= i / 2) < 1 ? r / 2 * t * t * (((o *= 1.525) + 1) * t - o) + n : r / 2 * ((t -= 2) * t * (((o *= 1.525) + 1) * t + o) + 2) + n
    },
    easeInBounce: function (e, t, n, r, i) {
        return r - jQuery.easing.easeOutBounce(e, i - t, 0, r, i) + n
    },
    easeOutBounce: function (e, t, n, r, i) {
        return (t /= i) < 1 / 2.75 ? 7.5625 * r * t * t + n : 2 / 2.75 > t ? r * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + n : 2.5 / 2.75 > t ? r * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + n : r * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + n
    },
    easeInOutBounce: function (e, t, n, r, i) {
        return i / 2 > t ? .5 * jQuery.easing.easeInBounce(e, 2 * t, 0, r, i) + n : .5 * jQuery.easing.easeOutBounce(e, 2 * t - i, 0, r, i) + .5 * r + n
    }
}), $(document).ready(function () {
    $("a#feature-link").click(function () {
        return $("html, body").animate({
            scrollTop: $($.attr(this, "href")).offset().top - 70
        }, 600, "easeInOutQuint"), !1
    })
}), $(window).on('load', function () {
    setTimeout(function () {
        $(window).on("load scroll", function () {
            $(".for-left").visible() === !0 && ($("#blank-space").removeClass("hide-at-first"), $("#js-rotating").Morphext({
                animation: "fadeIn",
                speed: 1e3,
                complete: function () {
                    "Sharing" === this.phrases[this.index] && this.stop()
                }
            }))
        })
    }, 2e3);
    var e = $(".ios");
    setTimeout(function () {
        function t(t) {
            e[t].classList.add("no-y-translate")
        }

        var n = 0,
            r = setInterval(function () {
                n < e.length ? (t(n), n++) : clearInterval(r)
            }, 250);
        $(".space-gray-phone-bg").animate({
            opacity: "1"
        }, 500), setTimeout(function () {
            $("#intro-phone").addClass("intro-phone-scroll"), $("#space-gray-phone").addClass("silver-phone-shrink")
        }, 1250)
    }, 500)
});
$(document).ready(function(){

    $("select").change(function(){

        $.post("handle.php", {specialiteti: $(this).val()}, function(result){
            $("#afishodr").html(result);
            $(".blue").show();
        });
    });
    $('select').material_select();
});
