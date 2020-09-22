class Timer {
    static get(target, date) {
        var elapsedTime
        var from = new Date("2018/9/10");
        var to = new Date();

        // 経過時間をミリ秒で取得
        var ms = to.getTime() - from.getTime();
        // ミリ秒を日付に変換(端数切捨て)
        var days = Math.floor(ms / (1000*60*60*24));
        var now_time = new Date();
        var sec_present = (now_time.getTime() / 1000).toFixed(0);
        var sec_start = (Date.parse("2018/9/10") / 1000).toFixed(0);
        var sec_time = sec_present - sec_start;

        var sec = sec_time % 60;
        var time = (sec_time - sec)/60;
        var min = time % 60;
        var time = (time - min)/60;
        var hour = time % 24;
        var time = (time - hour)/24;
        var days = time % 365;
        var time = (time - days)/365;
        var years = time;
        target.innerHTML = years + "年" + days + "日" + hour + "時間" + min + "分" + sec + "秒" ;
        // target.innerHTML = days;
    }

    static timer(target, date){
        Timer.get(target, date);
        setInterval(Timer.get(target, date), 1000);
    }
}
