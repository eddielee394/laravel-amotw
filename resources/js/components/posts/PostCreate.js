import React, { Component } from "react";
import axios from "axios";

class PostCreate extends Component {
    state = {
        post: { body: "" },
        errors: []
    };

    storePost = post => {
        const { handleGetPosts } = this.props;
        console.log("storePost ", post);
        axios.post("/posts", post).then(response => {});
    };

    setPost = post => {
        console.log("setPost: ", post);
        this.setState({
            post
        });
    };

    handleStorePost = e => {
        e.preventDefault();
        const { post } = this.state;
        console.log("handleStorePost: ", post);
        this.storePost(post);
    };

    handleInputChange = e => {
        const { name, value } = e.target;
        //compare the current state with the input value
        this.setState({
            //use the spread operator to get all of the params in the user array from the state
            post: {
                [name]: value
            }
        });
    };

    render() {
        const { body } = this.state;
        return (
            <div className="brk-form brk-form-transparent px-3 py-5">
                <div className="brk-form-wrap d-block">
                    <form onSubmit={this.handleStorePost}>
                        <textarea
                            id="post-body-input"
                            className="brk-form-textarea-transparent w-100 h-min-400 "
                            name="body"
                            value={body}
                            placeholder="Enter your message"
                            style={{ zIndex: 1, position: "relative" }}
                            onChange={this.handleInputChange}
                        />
                        <div className="submit-button-container text-center">
                            <button
                                type="submit"
                                className="btn btn-ice btn-xl btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200"
                            >
                                <span className="left-border" />
                                <span className="top-line">
                                    <span className="after" />
                                </span>
                                <span className="btn-text">
                                    <i
                                        className="fa fa-comments"
                                        aria-hidden="true"
                                    />
                                    <span className="before" /> Submit
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        );
    }
}

export default PostCreate;
