import React, { Component } from "react";
import axios from "axios";
import Post from "./Post";
import LoadMoreButton from "./actions/LoadMoreButton";

class PostsList extends Component {
    state = {
        posts: [],
        nextPage: "/api/posts",
        loading: false
    };

    componentDidMount() {
        this.getAllPosts();
    }

    getAllPosts = () => {
        const { loading, nextPage } = this.state;
        //check state is loading to avoid multiple requests
        if (!loading) {
            this.setState({
                loading: true
            });
        }

        //make request
        axios.get(nextPage).then(response => {
            const r = response.data,
                paginator = r.data,
                posts = paginator.data;

            //check if posts exist, then set state for the new page
            if (posts.length) {
                this.setState({
                    posts: [...this.state.posts, ...posts],
                    nextPage: paginator.next_page_url,
                    loading: false
                });
            }
        });
    };

    handleLoadMore = event => {
        event.preventDefault();
        this.loadMore();
    };

    loadMore = () => {
        this.getAllPosts();
    };

    render() {
        const { posts, loading, nextPage } = this.state;
        return (
            <div className="posts-container">
                <div className="timeline timeline--vertical-squares">
                    <div className="timeline__wrapper">
                        <Post posts={posts} />
                    </div>
                    <div className="timeline__progress-bar">
                        <LoadMoreButton
                            handleLoadMore={this.handleLoadMore}
                            loading={loading}
                            nextPage={nextPage}
                        />
                    </div>
                </div>
            </div>
        );
    }
}

PostsList.propTypes = {};

export default PostsList;
