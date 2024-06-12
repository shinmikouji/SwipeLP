const counter = (number) => {
  const windowSize = document.documentElement.clientWidth;
  const pc = windowSize >= 769;
  return {
    id: `counter${number}`,
    beforeDraw(chart) {
      const {
        ctx,
        chartArea: { top, width, height },
      } = chart;
      ctx.save();
      ctx.fillStyle = "#0072AD";
      ctx.fillRect(width / 2, top + height / 2, 0, 0);
      ctx.textAlign = "center";

      ctx.font = `bold ${pc ? "0.78vw" : "16px"} Noto Sans JP`;
      ctx.fillText("モバイル", width / 2, top + height / 2.45);

      ctx.font = `bold ${pc ? "2vw" : "32px"} Noto Sans JP`;
      ctx.fillText(number, width / 2.2, top + height / 1.8);

      ctx.font = `bold ${pc ? "0.9vw" : "14px"} Noto Sans JP`;
      ctx.fillText("%", width / 1.535, top + height / 1.73);
      ctx.restore();
    },
  };
};

const createGradient = (ctx, area) => {
  const gradient = ctx.createLinearGradient(0, area.top, 0, area.bottom);
  gradient.addColorStop(0, "#07C1D0");
  gradient.addColorStop(1, "#0072AD");
  return gradient;
};

const dataOption = (numArry) => {
  return {
    datasets: [
      {
        data: [...numArry],
        backgroundColor: (ctx) => {
          const chartArea = ctx.chart.chartArea;
          if (!chartArea) {
            return null;
          }
          return [
            createGradient(ctx.chart.ctx, chartArea),
            "#82E0E7",
            "#CCF3F6",
          ];
        },
      },
    ],
  };
};

const options = {
  responsive: true,
  animation: {
    duration: 2000,
  },
  plugins: {
    tooltip: {
      enabled: false,
    },
  },
};

const initializeChart = (chartElement) => {
  const ctx = chartElement.getContext("2d");
  const number = chartElement.getAttribute("data-number");
  const values = chartElement
    .getAttribute("data-values")
    .split(",")
    .map(Number);

  new Chart(ctx, {
    type: "doughnut",
    data: dataOption(values),
    options: options,
    plugins: [counter(number)],
  });
};

document.addEventListener("DOMContentLoaded", function () {
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        initializeChart(entry.target);
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  document.querySelectorAll(".chart").forEach((chart) => {
    observer.observe(chart);
  });
});