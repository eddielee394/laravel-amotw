import React, { Component } from "react";
import axios from "axios";
import Post from "./Post";
import LoadMoreButton from "./components/LoadMoreButton";
import AddNewButton from "./components/AddNewButton";

class PostsList extends Component {
    state = {
        posts: [],
        nextPage: "/api/posts",
        loading: false
    };

    /**
     * Fires when the component is mounted
     */
    componentDidMount() {
        this.getPosts();
    }

    /**
     * Gets the post from the api
     */
    getPosts = () => {
        const { nextPage } = this.state;

        //set state to loading to avoid multiple requests
        this.setLoading();

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

    /**
     * Load posts
     */
    loadMore = () => {
        this.getPosts();
    };

    /**
     * Sets the loading state
     * @param isLoading
     * @default true
     * @return bool
     */
    setLoading = () => {
        const { loading } = this.state;
        //check state is loading to avoid multiple requests
        if (!loading) {
            this.setState({
                loading: true
            });
        }
    };

    /**
     * Load More event handler
     * @param event
     */
    handleLoadMore = e => {
        e.preventDefault();
        this.loadMore();
    };

    handleAddNew = e => {
        e.preventDefault();
        console.log("add new button clicked");
    };

    render() {
        const { posts, loading, nextPage } = this.state;
        return (
            <div className="posts-container pb-5">
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
                <AddNewButton handleAddNew={this.handleAddNew} />
            </div>
        );
    }
}

PostsList.propTypes = {};

export default PostsList;
