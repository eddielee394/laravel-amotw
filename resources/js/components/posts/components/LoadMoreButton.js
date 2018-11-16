import React from "react";
import PropTypes from "prop-types";
import { ScaleLoader } from "react-spinners";

const LoadMoreButton = props => {
    const { loading, nextPage, handleLoadMore } = props;
    const allPostsLoaded = nextPage === null;
    const isDisabled = loading || nextPage === null;
    const isLoading = loading ? "LOADING" : "LOAD MORE";

    let loadMoreButton = null;
    if (!allPostsLoaded) {
        loadMoreButton = (
            <button
                className="btn btn--bg__icon font__family-open-sans font-weight-bold font__size-16 line__height-16"
                onClick={handleLoadMore}
                disabled={isDisabled}
            >
                <ScaleLoader color={"#00c6ff"} loading={loading} />
                <i className="far fa-sync" /> {isLoading}
            </button>
        );
    }

    return loadMoreButton;
};

LoadMoreButton.propTypes = {
    loading: PropTypes.bool.isRequired,
    handleLoadMore: PropTypes.func.isRequired
};

export default LoadMoreButton;
