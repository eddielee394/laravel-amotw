import React from "react";

const PostCreate = props => {
    const { handleAddNew } = props;
    return (
        <div className="brk-form brk-form-transparent px-3 py-5">
            <div className="brk-form-wrap d-block">
                <form onSubmit={handleAddNew}>
                    <textarea
                        id="post-body-input"
                        className="brk-form-textarea-transparent w-100 h-min-400 "
                        name="body"
                        placeholder="Enter your message"
                        style={{ zIndex: 1, position: "relative" }}
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
                                <span className="before" />
                                Submit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default PostCreate;
