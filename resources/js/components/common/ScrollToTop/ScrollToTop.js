import React, { Component } from "react";

class ScrollTop extends Component {
    state = {
        intervalId: 0,
        showScroller: false
    };
    delayInMs = "16";
    scrollStepInPx = 50;

    componentDidMount() {
        window.addEventListener("scroll", this.toggleScroll);
    }

    componentWillUnmount() {
        window.removeEventListener("scroll", this.toggleScroll);
    }

    toggleScroll = () => {
        if (window.pageYOffset > 200) {
            this.setState({ showScroller: true });
        } else {
            this.setState({ showScroller: false });
        }
    };

    scrollStep = () => {
        if (window.pageYOffset === 0) {
            clearInterval(this.state.intervalId);
        }
        window.scroll(0, window.pageYOffset - this.scrollStepInPx);
    };

    scrollToTop = e => {
        e.preventDefault();

        let intervalId = setInterval(this.scrollStep, this.delayInMs);
        this.setState({ intervalId: intervalId });
    };

    render() {
        const { showScroller } = this.state;
        if (showScroller) {
            return (
                <a
                    href="javascript:void(0)"
                    className="icon__btn icon__btn-anim icon__btn-md icon__btn-invert"
                    onClick={this.scrollToTop}
                >
                    <i
                        className="fa fa-arrow-up icon-inside"
                        aria-hidden="true"
                    />
                    <span className="before" />
                    <span className="after" />
                </a>
            );
        }
        return null;
    }
}

export default ScrollTop;
