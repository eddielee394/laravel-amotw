import React from "react";

const Rounded = () => {
  return (
    <div className="delimiter__rounded pt-50">
      <span className="overlay__delimiter-after brk-base-bg-gradient-4" />

      <span className="overlay__delimiter-before absolute-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 365.6">
          <defs>
            <style>{`.a2 {
	            fill: url(#a2);
            }

            .a2, .b2 {
	            fill-rule: evenodd;
            }

            .b2 {
	            fill: #fff;
            }`}</style>
            <linearGradient
              id="a2"
              y1="240"
              x2="1787"
              y2="240"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0%" />
              <stop offset="50%" />
            </linearGradient>
          </defs>
          <path
            className="a2"
            d="M1920,365.6H0V233.21C487.24,89,1095.45-106.63,1920,70.34Z"
          />
          <path
            className="b2"
            d="M0,343.21V365.6H1920V89.6C1125.22-68.53,13.61,337.23,0,343.21Z"
          />
        </svg>
      </span>
    </div>
  );
};

export default Rounded;
