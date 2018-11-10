import React from "react";

const Triangle = () => {
  return (
    <div
      className="position-relative brk-bg-center-cover pt-180 lazyload"
      data-bg="img/bg-14.jpg"
      
    >
      <div className="brk-abs-bg-overlay brk-base-bg-gradient-90deg" />
      <span
        className="brk-svg-pattern-container brk-svg-pattern-container-5 brk-svg-pattern-container_bottom"
        
      >
        <svg
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlnsXlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 1920 110"
          enableBackground="new 0 0 1920 110"
          xmlSpace="preserve"
        >
          <g>
            <path
              fill="#FFFFFF"
              d="M0,110h961L0,0V110z M961,110h959V0L961,110z"
            />
          </g>
        </svg>
      </span>
      <div className="container">
        <h2 className="text-center brk-white-font-color font__family-montserrat font__size-21 font__weight-light line__height-22 text-uppercase mb-20">
          Featured
        </h2>
        <h2 className="text-center brk-white-font-color font__family-montserrat font__size-56 font__weight-bold line__height-56">
          Our Features
        </h2>
      </div>
      <div
        className="text-center z-index-3 position-relative"
        style="bottom: -75px"
      >
        <img src="img/ipad.png" data-src="" alt="alt" className="lazyload" />
      </div>
      <img
        src="img/case-1.png"
        className="position-absolute z-index-1 lazyload"
        style="left: 0; top: 0;"
        alt="alt"
      />
      <img
        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
        data-src="img/case-2.png"
        className="position-absolute z-index-1 lazyload"
        style="right: 0; bottom: 0"
        alt="alt"
      />
      <img
        src="img/case-3.png"
        className="position-absolute z-index-1 lazyload"
        style="left: 14%; bottom: 0; max-width: 76%"
        alt="alt"
      />
      <span
        className="brk-svg-pattern-container brk-svg-pattern-container-6 brk-svg-pattern-container_top"
        
      >
        <svg
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlnsXlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 1920 110"
          enableBackground="new 0 0 1920 110"
          xmlSpace="preserve"
        >
          <g>
            <polygon
              fillRule="evenodd"
              clipRule="evenodd"
              fill="#FFFFFF"
              points="0,0 960,110 1920,0 		"
            />
          </g>
        </svg>
      </span>
    </div>
  );
};

export default Triangle;
