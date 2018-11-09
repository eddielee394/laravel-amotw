import React, { Component } from "react";
import PropTypes from "prop-types";
import axios from "axios";

class PostsList extends Component {
    state = {
        posts: []
    };

    componentDidMount() {
        this.getAllPosts();
    }

    getAllPosts = () => {
        axios.get("/api/posts").then(response => {
            this.setState(
                {
                    posts: response.data
                },
                console.log("State:", this.state.posts)
            );
            console.log("getAllPosts: ", response.data);
        });
    };

    render() {
        const { posts } = this.state;

        return (
            <div className="posts-container">
                {posts.map(post => (
                    <div className="card mb-3" key={post.id}>
                        <div className="card-header">Home</div>
                        <div className="card-body">
                            <div className="card-title">User: {post.id}</div>
                            <div className="card-text">{post.body}</div>

                            <div className="card-footer">
                                <div className="small text-muted">
                                    {post.created_at_relative}
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        );
    }
}

PostsList.propTypes = {};

export default PostsList;
