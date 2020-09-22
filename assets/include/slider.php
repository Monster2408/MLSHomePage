<style>
.container {
    position: relative;
    width: 100%;
    margin: 0 auto;
    background: #000000; /*背景色*/
}

ul.list {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-bottom: 66.7%;
    margin: 0 auto;
}

li.item {
    position: absolute;
    padding: auto;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity .6s ease-in-out;
}
li.item.current {
    opacity: 1;
}

li.item img {
    width: 100%;
    align-items: center;
}

.buttons {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.button {
    width: 32px;
    height: 32px;
    border: none;
    outline: none;
    padding: 0;
    background: transparent center no-repeat;
    cursor: pointer;
    opacity: .4;
    background: #000000; 
}
.button.prev {
    background-image: url(https://codeisle.info/blog/wp-content/uploads/2018/12/ico_next_b32.png);
}
.button.next {
    background-image: url(https://codeisle.info/blog/wp-content/uploads/2018/12/ico_next_b32-1.png);
}
.button:hover {
    opacity: .8;
}

.dots {
    display: flex;
    justify-content: center;
    margin: 10px 0;
}

.dot {
    display: block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: none;
    outline: none;
    padding: 0;
    margin-bottom: 10px;
    background: #777;
    cursor: pointer;
    opacity: .5;
    transition: opacity .4s ease-in-out;
}
.dot:nth-child(n+2) {
    margin-left: 5px;
}
.dot.current {
    opacity: 1;
}
</style>

<div class=container>
    <ul class=list>
        <li class="item current"><img src="<?php echo $conf["url"]; ?>/assets/img/_car/24H.png"></li>
        <li class=item><img src="<?php echo $conf["url"]; ?>/assets/img/_car/dbd.png"></li>
        <li class=item><img src="<?php echo $conf["url"]; ?>/assets/img/_car/aooni.png"></li>
        <li class=item><img src="<?php echo $conf["url"]; ?>/assets/img/_car/online.png"></li>
    </ul>
    <div class=buttons>
        <button type=button id=prev class="button prev"></button>
        <button type=button id=next class="button next"></button>
    </div>
    <div class=dots>
        <button type=button class="dot current"></button>
        <button type=button class=dot></button>
        <button type=button class=dot></button>
        <button type=button class=dot></button>
    </div>
</div>

<script id="rendered-js">
    function slider(condition) {
        var current = $(".item.current"),
            next,
            index;//
        if (condition >= 0) {
            next = $(".item").eq(condition);
            index = condition;
        } else if (condition == 'prev') {
            next = current.is(":first-child") ? $(".item").last() : current.prev();
            index = next.index();
        }else {
            next = current.is(":last-child") ? $(".item").first() : current.next();
            index = next.index();
        }
        next.addClass("current");
        current.removeClass("current");
        $(".dot").eq(index).addClass("current").siblings().removeClass("current");
    }
    var setSlider = setInterval(slider, 4000);

    $(".button").on("click", function() {
        clearInterval(setSlider);
        var flag = $(this).is(".prev") ? 'prev' : 'next';
        slider(flag);
        setSlider = setInterval(slider, 4000);
    });

    $(".dot").on("click", function() {
        if ($(this).is(".current")) return;
        clearInterval(setSlider);
        var index = $(this).index();
        slider(index);
        setSlider = setInterval(slider, 4000);
    });
</script>