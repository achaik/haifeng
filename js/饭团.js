var rule = {
    title:'饭团',
  
    host:'https://www.fantuanhd.com/',
    // url:'/vod_________________________show/fyclass--------fypage---.html',
  url:'/type/id-fyclass-fypage.html',
    searchUrl:'/search.html?wd=**&submit=',
        class_name:'电影&电视剧&综艺&动漫&纪录片&动画片',
    class_url:'20&21&22&23&24&25',
headers:{
        'User-Agent':'MOBILE_UA'
    },
    searchable:0,
    quickSearch:0,
    timeout:5000,
 推荐: '.stui-vodlist&&li;h4&&title;a&&data-original;.title&&Text;a&&href',

// class_parse:'.type&&li:a&&Text;a&&href',
      一级:'.stui-vodlist&&li;a&&title;a&&data-original;.pic-text&&Text;a&&href',
     limit:5,
    play_parse:true,
    lazy:'',
    二级: {
                "title": "h1&&Text;.stui-content__detail&&p:eq(0)&&Text",
                "img": ".lazyload&&data-original",
                "desc": ".stui-content__detail&&p:eq(1)&&Text;.stui-content__detail&&p:eq(2)&&Text;.stui-content__detail&&p:eq(3)&&Text",
                "content": ".detail-sketch&&Text",
                "tabs": ".stui-pannel&&h3",
                "lists": ".stui-pannel-box&&ul:eq(#id) li"
            },
                   搜索: '.vods&&.vod;a&&title;img&&data-original;div&&Text;a&&href',
}