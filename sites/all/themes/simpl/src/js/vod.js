/**
 * Created by alaa on 10/8/15.
 */

var path = {
    image: "http://admin.mangomolo.com/analytics/",
    video: "http://lb218.mangomolo.com"
};

var ProgramWithEpisode = React.createClass({

    render: function() {
        var eps;

        if ($(this.props.episode).length > 0) {
            eps = <div className="li-episode"> 
                    <EpisodeCover data={this.props.episode} /> 
                    <h4><a href={"/episode/" + this.props.episode.id}>{this.props.episode.title_ar}</a></h4> 
                    <p>{this.props.episode.recorder_date}</p>
                   </div>;
        } else {
            eps = "";
        }

        return (
            <li>
                <div className="li-program">
                    <a href={"/show/" + this.props.id}>
                        <img src={this.props.image}  />
                    </a>
                    <h4>
                        {this.props.name}
                    </h4>
                    <p>
                        {this.props.summary}
                    </p>
                </div>

                <div className="strike-through-header">
                    <h3><a href={"/show/" + this.props.id}>تصفح البرنامج</a></h3>
                </div>

                {eps}

            </li>
        );
    }
});

var Program = React.createClass({

    render: function() {

        return (
            <li>
                <a href={"/show/" + this.props.id}>
                    <img src={this.props.image}  />
                </a>
                <h4>
                    {this.props.name}
                </h4>
                <p>
                    {this.props.summary}
                </p>
            </li>
        );
    }
});

var EpisodeCover = React.createClass({
    render: function () {
        return (
            <a href={"/episode/" + this.props.data.id}>
                <img src={path.image + this.props.data.img}  />
                <i className="fa fa-play" />
            </a>
        )
    }
});

var EpisodePlayer = React.createClass({
    render: function () {
        //return (
        //    <iframe width="100%" height="350" src="http://admin.mangomolo.com/analytics/index.php/plus/getEmbed?id=26652936&code=1&user_id=97"></iframe>
        //)
        return (
            <video id="example_video_1" className="video-js vjs-default-skin" controls preload="none" width="597" height="350"
                   poster={path.image + this.props.data.img}
                   data-setup="">
                <source src={path.video + this.props.data.url} type='video/mp4' />
            </video>
        )
    }
});

var Episode = React.createClass({
    render: function() {
        if (this.props.view == 'summary') {
            var summary = this.props.data.description_ar;
        } else {
            var summary = this.props.data.recorder_date;
        }
        return (
            <li>
                <EpisodeCover data={this.props.data} />
                <h4>
                    <a href={"/episode/" + this.props.data.id}>{this.props.data.title_ar}</a>
                </h4>
                <p>
                    {summary}
                </p>
            </li>
        );
    }
});

var  EpisodeList = React.createClass({
    render: function() {
        var view = this.props.view;
        var nodes = this.props.data.map(function (item, index) {
                return (
                    <Episode data={item} view={view}></Episode>
                );
        });
        return (
            <ul>
                {nodes}
            </ul>
        );
    }
});

var ProgramList = React.createClass({
        render: function() {
            var nodes = this.props.data.map(function (item) {
                return (
                    <Program name={item.title_ar} summary={item.description_ar} image={path.image + item.icon} id={item.id}></Program>
                );
            });
            return (
                <ul>
                    {nodes}
                </ul>
            );
        }
});

var TodayBox = React.createClass({
        getInitialState: function() {
            return {data: []};
        },
        componentDidMount: function() {
            $.ajax({
                url: this.props.url,
                dataType: 'json',
                cache: false,
                success: function(data) {

                    this.setState({data: data});
                    $("#" + this.props.id + ">ul").owlCarousel({
                        items : 3,
                        nav:true
                    });

                }.bind(this),
                error: function(xhr, status, err) {
                    console.error(this.props.url, status, err.toString());
                }.bind(this)
            });
        },
        render: function() {

            return (
                <EpisodeList data={this.state.data} view="summary" />
            );
        }
});

var ProgramsPage = React.createClass({
        getInitialState: function() {
            return {data: []};
        },
        componentDidMount: function() {
            $.ajax({
                url: this.props.url,
                dataType: 'json',
                cache: false,
                success: function(data) {
                    this.setState({data: data});
                }.bind(this),
                error: function(xhr, status, err) {
                    console.error(this.props.url, status, err.toString());
                }.bind(this)
            });
        },
        render: function() {

            var nodes = this.state.data.map(function (item) {
                return (
                    <ProgramWithEpisode episode={item.videos[0]} name={item.title_ar} summary={item.description_ar} image={path.image + item.icon} id={item.id}></ProgramWithEpisode>
                );
            });
            return (
                <ul>
                    {nodes}
                </ul>
            );
        }
});

var ShowPage = React.createClass({
    getInitialState: function() {
        return {data: [], category: [], videos: [], episode: []};
    },
    componentDidMount: function() {
        $.ajax({
            url: this.props.url,
            dataType: 'json',
            cache: false,
            success: function(data) {
                this.setState({data: data, category: data.category, videos: data.videos, episode: data.videos[0]});
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(this.props.url, status, err.toString());
            }.bind(this)
        });
    },
    render: function() {

        return (
            <div>
                <div className="show-featured">
                    <div className="first">
                        <ProgramList data={[this.state.category]} />
                    </div>
                    <div className="second">
                        <ul>
                            <Episode data={this.state.episode}
                                     first={true}></Episode>
                        </ul>
                    </div>
                </div>
                <div className="show-episodes">
                        <EpisodeList data={this.state.videos}></EpisodeList>
                </div>
            </div>
        );
    }
});

var EpisodePage = React.createClass({
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
        $.ajax({
            url: this.props.url,
            cache: false,
            success: function(data) {
                this.setState({data: data});
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(this.props.url, status, err.toString());
            }.bind(this)
        });
    },
    render: function() {

        return (
            <div className="iframe-holder">
                <iframe width="100%" height="100%" src={this.state.data} frameborder="0" allowfullscreen scrolling="no"></iframe>
            </div>
        );
    }
});

var EpisodeHeadline = React.createClass({
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
        $.ajax({
            url: this.props.url,
            cache: false,
            dataType: 'json',
            success: function(data) {
                this.setState({data: data});
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(this.props.url, status, err.toString());
            }.bind(this)
        });
    },
    render: function() {
        //console.log(this.state.data.category_id);

        if(typeof this.state.data.category_id !== 'undefined') {
            React.render(
                <EpisodeRelated
                    url={"http://admin.mangomolo.com/analytics/index.php/nand/RelatedVideosInCat?id=" + this.state.data.category_id + "&user_id=97"}/>,
                document.getElementById('episode-related')
            );
        }

        return (
            <div>
              
                <h3 className="node-title">{this.state.data.title_ar}</h3>
                <div className="a-date">
                    {moment(this.state.data.publish_time).locale('ar-tn').format('LLLL')}
                </div>
                  
            </div>
        );
    }
});

var EpisodeRelated = React.createClass({
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
        $.ajax({
            url: this.props.url,
            cache: false,
            dataType: 'json',
            success: function(data) {
                this.setState({data: data});
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(this.props.url, status, err.toString());
            }.bind(this)
        });
    },
    render: function() {
        var eps = this.state.data.slice(0,3);
        var nodes = eps.map(function (item) {
            return (
                <li>
                    <div>
                        <a href={"/episode/" + item.id}><img src={path.image + item.img} /></a>
                        <div><h5><a href={"/episode/" + item.id}>{item.title_ar}</a></h5></div>
                    </div>

                </li>
            );
        });
        return (
            <ol className="topfive">
                {nodes}
            </ol>
        );
    }
});

var EpisodeBody = React.createClass({
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
        $.ajax({
            url: this.props.url,
            cache: false,
            dataType: 'json',
            success: function(data) {
                this.setState({data: data});
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(this.props.url, status, err.toString());
            }.bind(this)
        });
    },
    render: function() {

        return (
            <div className="node-body">
                <p>{this.state.data.description_ar}</p>
            </div>
        );
    }
});

// Initialise the LightRouter router
var router = new LightRouter({
    type: 'path',
    pathRoot: '/',
});

router.add('', function(params) {
    React.render(
        <TodayBox id="vod-today" url="http://admin.mangomolo.com/analytics/index.php/nand/featured?user_id=97" />,
        document.getElementById('vod-today')
    );
});

router.add('show/{id}', function(params) {
    React.render(
        <ShowPage url={"http://admin.mangomolo.com/analytics/index.php/nand/GetVideosWithProgramInfo?cat_id=" + params.id + "&user_id=97"} />,
        document.getElementById('show-page')
    );
});

router.add('programs', function(params) {
    React.render(
        <ProgramsPage url={"http://admin.mangomolo.com/analytics/index.php/plus/category?id=45&o=channel&videos=1&user_id=97"} />,
        document.getElementById('show-episodes')
    );
});

router.add('episode/{id}', function(params) {
    React.render(
        <EpisodePage url={"http://admin.mangomolo.com/analytics/index.php/plus/getEmbed?id="+ params.id +"&code=1&user_id=97"} />,
        document.getElementById('episode-page')
    );

    React.render(
        <EpisodeHeadline url={"http://admin.mangomolo.com/analytics/index.php/nand/VideoWithProgramInfo?video_id="+ params.id +"&user_id=97"} />,
        document.getElementById('episode-headline')
    );

    React.render(
        <EpisodeBody url={"http://admin.mangomolo.com/analytics/index.php/nand/VideoWithProgramInfo?video_id="+ params.id +"&user_id=97"} />,
        document.getElementById('episode-body')
    );
});

router.run();

