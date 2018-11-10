import React from "react";

const Trapezoid = () => {
  return (
    <div className="overlay__gradient delimiter__trapezoid pt-sm-130 pt-50 pb-60 pb-sm-160 mt-80">
      <span className="overlay__delimiter-before">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1920 441"
          preserveAspectRatio="none"
        >
          <defs>
            <style>{`.a6 {
	            fill: #fff;
	            fill-rule: evenodd;
            }`}</style>
          </defs>
          <path className="a6" d="M1920,441V341L0,441ZM0,0,1920,100V0Z" />
        </svg>
      </span>
      <span className="overlay__delimiter-after brk-base-bg-gradient-90deg" />
    </div>
  );
};

export default Trapezoid;
