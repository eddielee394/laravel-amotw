import React from "react";

const Curve = () => {
    return (
        <div className="bg__style overlay__gradient delimiter__curve pt-80 pb-10 mt-80">
            <span className="overlay__delimiter-before">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1920 197.02"
                >
                    <defs>
                        <style>
                            {`.a5 {fill: url(#a5);}
                    
                        .a5, .b5 {fill - rule: evenodd;}
                    
                        .b5 {fill: #fff;}`}
                        </style>
                        <linearGradient
                            id="a5"
                            y1="240"
                            x2="1787"
                            y2="240"
                            gradientUnits="userSpaceOnUse"
                        >
                            <stop
                                offset="0%"
                                stopColor="var(--brand-primary)"
                            />
                            <stop offset="80%" stopColor="var(--secondary)" />
                        </linearGradient>
                    </defs>
                    <path
                        className="a5"
                        d="M1231,109.07C974.2,70.21,708.37,12,477,1.12,258.44-9.18,54.57,54.45,0,78.08V197H1920V31.1S1603.21,165.38,1231,109.07Z"
                    />
                    <path
                        className="b5"
                        d="M1920,131.06s-316.79,72.31-689,16C974.2,108.19,706.37,41,475,30.1,256.44,19.81,54.57,70.55,0,94.18V197H1920Z"
                    />
                </svg>
            </span>{" "}
            <span className="overlay__delimiter-after brk-base-bg-gradient-50deg-a" />
        </div>
    );
};

export default Curve;
