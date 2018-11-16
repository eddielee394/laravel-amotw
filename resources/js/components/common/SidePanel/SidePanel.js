import React, { Component } from "react";
import Delimiters from "../Delimiters";

class SidePanel extends Component {
    state = {
        renderPanel: false
    };

    handleRenderPanel = event => {
        const { renderPanel } = this.state;
        event.preventDefault();
        this.setState(prevState => ({
            renderPanel: !prevState.renderPanel
        }));
    };

    render() {
        const { renderPanel } = this.state;
        const { title } = this.props;

        const activeClass = renderPanel && "active";

        return (
            <div className={`brk-theme-options ${activeClass}`}>
                <div className="brk-theme-options__panel">
                    <a
                        href="javascript:void(0)"
                        onClick={this.handleRenderPanel}
                        className="brk-theme-options__panel-link"
                    >
                        <i className="fal fa-comment-alt font__size-28" />
                    </a>
                </div>
                <div className="brk-theme-options__control">
                    <div className="brk-theme-options__header">
                        <span className="font__family-montserrat font__weight-bold font__size-21 pl-30">
                            {title}
                        </span>
                        <a
                            href="javascript:void(0);"
                            onClick={this.handleRenderPanel}
                        >
                            <div className="brk-theme-options__close panel-close">
                                <i className="far fa-times" />
                            </div>
                        </a>
                    </div>
                    <div className="brk-bg-center-cover brk-base-bg-gradient-5 pt-80">
                        {this.props.children}
                        <Delimiters curve />
                    </div>
                </div>
            </div>
        );
    }
}

export default SidePanel;
