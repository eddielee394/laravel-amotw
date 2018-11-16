import React, { Component } from "react";
import axios from "axios";
import { ScaleLoader } from "react-spinners";

class PostCreate extends Component {
    state = {
        post: { body: "" },
        errors: []
    };

    /**
     * Store the post
     * @param post
     * @param callback function callback function to run after api request
     */
    storePost = (post, callback) => {
        const { handleGetPosts, setLoading } = this.props;

        //set loading to prevent double submission while waiting for the response
        setLoading();

        //Store the post to the api
        axios
            .post("/posts", post)
            .then(response => {
                //update the post state & render the new post
                this.setPost(post, handleGetPosts);
                callback();
                console.log("Post Added", response);
            })
            .catch(error => {
                console.log("Error adding post", error);
            });
    };

    /**
     * Set the post state
     * @param post object Object passed to the setState method
     * @param callback function Callback function that runs after the state is set
     */
    setPost = (post, callback = null) => {
        this.setState({ post }, callback);
    };

    /**
     * Store Post event handler
     * @param e object The event object
     */
    handleStorePost = e => {
        e.preventDefault();
        const { post } = this.state;
        //resets the input - todo: manage this with redux
        const resetInput = () => (this.input.value = "");

        //pass the post object & input reset function as callback to storePost() method
        this.storePost(post, resetInput);
    };

    /**
     * Input change handler
     * @param e object The event object
     */
    handleInputChange = e => {
        const { name, value } = e.target;
        //update post state
        this.setState({
            //Update the post state's property
            post: {
                [name]: value
            }
        });
    };

    render() {
        const { body } = this.state;
        const { loading } = this.props;
        const btnText = loading ? "SAVING" : "SUBMIT";
        const btnClass = `btn btn-ice btn-xl btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 ${
            loading ? "loading" : ""
        }`;
        const btnIsDisabled = loading ? "disabled" : "";

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
                            ref={input => (this.input = input)}
                        />
                        <div className="submit-button-container text-center">
                            <button
                                type="submit"
                                className={btnClass}
                                disabled={btnIsDisabled}
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
                                    <ScaleLoader
                                        color={"#00c6ff"}
                                        loading={loading}
                                        className="loader floating"
                                    />
                                    <span className="before" /> {btnText}
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
