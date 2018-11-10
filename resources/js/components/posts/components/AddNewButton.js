import React from "react";

const AddNewButton = props => {
    const style = {
        float: "right",
        bottom: "1rem",
        right: "1rem",
        zIndex: "1031"
    };
    const { handleAddNew } = props;
    return (
        <a
            href="javascript:void(0)"
            className="btn btn-ice btn-lg border-radius-25 font__family-open-sans font__weight-bold position-fixed"
            style={style}
            onClick={handleAddNew}
        >
            <span className="left-border" />
            <span className="top-line">
                <span className="after" />
            </span>
            <span className="btn-text">
                <span className="before" />
                <i className="fa fa-comment-alt font__size-28 mx-1" />
            </span>
        </a>
    );
};

export default AddNewButton;
