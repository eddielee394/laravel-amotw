import React, { Component } from "react";
import PropTypes from "prop-types";

class Post extends Component {
    render() {
        const { posts } = this.props;
        return (
            <React.Fragment>
                {posts.map(post => (
                    <div className="timeline__item" key={post.id}>
                        <div className="timeline__box">
                            <span className="before brk-base-bg-gradient-bottom-blue" />
                            <div className="timeline__content text-left brk-dark-font-color">
                                <h4
                                    className="title__divider title__divider--gradient font__size-21 font__weight-bold font__family-montserrat line__height-24 text-center"
                                    data-brk-library="component__dividers"
                                >
                                    <span className="title__divider__wrapper">
                                        {post.user.username}
                                        <span className="line-left brk-base-bg-gradient-12" />
                                        <span className="line-right brk-base-bg-gradient-11" />
                                    </span>
                                </h4>
                                <p className="mt-25 text-left font__family-oxygen font__weight-medium font__size-16 letter-spacing--1 line__height-26">
                                    {post.body}
                                </p>
                                <div className="my-2">
                                    <span className="brs-post__date text-light-blue ">
                                        <i className="far fa-clock brs-post__date-icon pr-2" />
                                        <span className="font__family-montserrat font__weight-normal font__size-13 line__height-14">
                                            {post.created_at_relative}
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <span className="after">
                                <i className="fal fa-archive" />
                            </span>
                        </div>
                    </div>
                ))}
            </React.Fragment>
        );
    }
}

Post.propTypes = {
    posts: PropTypes.array.isRequired
};

export default Post;
