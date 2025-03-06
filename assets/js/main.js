"use strict";

// ===== change theme when 6:00pm =====
const refreshTime = function () {
  const now = new Date().getHours();
  // show light theme from 6 am to 6 pm
  if (now >= 6 && now <= 17) {
    document.documentElement.setAttribute("data-theme", "light");
  } else {
    document.documentElement.setAttribute("data-theme", "dark");
  }
};
setInterval(refreshTime, 0);

// ===== add event on multiple element =====
const addEventOnElements = function (elements, eventType, callback) {
  if (elements) {
    for (let i = 0; i < elements.length; i++) {
      elements[i].addEventListener(eventType, callback);
    }
  }
};

// ===== appheight =====
const appHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty(
    "--app-height",
    `${document.documentElement.clientHeight}px`
  );
};
window.addEventListener("resize", appHeight);

// ===== lenis =====
let lenis;
const initLenis = () => {
  lenis = new Lenis({
    lerp: 0.05,
    smoothWheel: true,
  });
  lenis.on("scroll", (e) => { });
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
};

// ===== scroll header =====
if (document.querySelector(".homepage")) {
  const header = document.querySelector(".c-header");
  "pageshow scroll".split(" ").forEach((evt) => {
    window.addEventListener(evt, () => {
      let scrollY = window.scrollY;
      let hSize =
        document.querySelector(".js-offset-top").getBoundingClientRect().top +
        scrollY;

      if (scrollY > hSize) {
        header.classList.remove("--hide");
      } else {
        header.classList.add("--hide");
      }
    });
  });
  // ##
  "pageshow load".split(" ").forEach((evt) => {
    window.addEventListener(evt, () => {
      $(".js-play").get(0).play();
      $(".js-play").get(1).play();
    })
  });
}

// ===== back to top =====
const backToTop = document.querySelector("[data-backtotop]");
backToTop.addEventListener("click", () => {
  // lenis.stop();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
  // lenis.start();
});

// ===== fade content ====
const elementsArray = document.querySelectorAll("[data-ufade]");
const fadeIn = () => {
  for (let i = 0; i < elementsArray.length; i++) {
    let elem = elementsArray[i];
    let distInView =
      elem.getBoundingClientRect().top - window.innerHeight + 100;
    if (distInView < 0) {
      elem.classList.add("fadein");
    }
  }
};
window.addEventListener("scroll", fadeIn);
window.addEventListener("pageshow", fadeIn);

// ===== popup =====
const [popup, popupToggler, popupClose, headerContact] = [
  document.querySelectorAll("[data-popup]"),
  document.querySelectorAll("[data-popup-toggler]"),
  document.querySelectorAll("[data-popup-close]"),
  document.querySelector(".c-header_right"),
];
let tilVideo;

const closePopupAll = () => {
  stopVideo();
  headerContact.classList.remove("--hide");
  $(`[data-popup]`).fadeOut();
  clearInterval(tilVideo);
};

popupToggler.forEach((itemElement) => {
  const itemNumber = itemElement.getAttribute("data-popup-toggler");
  const popupElement = document.querySelector(`[data-popup="${itemNumber}"]`);

  itemElement.addEventListener("click", () => {
    closePopupAll();
    if (popupElement) {
      $(`[data-popup="${itemNumber}"]`).fadeIn();
      headerContact.classList.add("--hide");
      // display title video
      tilVideo = setInterval(() => {
        if ($(`[data-popup="${itemNumber}"]`).find("iframe").length > 0) {
          $(`[data-popup="${itemNumber}"]`).find("p.title").fadeIn();
          clearInterval(tilVideo);
        }
      }, 1000);
    }
  });
});

popupClose.forEach((itemElement) => {
  itemElement.addEventListener("click", () => {
    closePopupAll();
    stopVideo();
  });
});

const stopVideo = function () {
  const iframe = document.querySelectorAll(".detail_popup_video iframe");
  const video = document.querySelectorAll(".detail_popup_video video");
  // type iframe
  if (iframe.length) {
    iframe.forEach((item) => {
      const iframeSrc = item.src;
      item.src = iframeSrc;
    });
  }
  // type video
  if (video.length) {
    video.forEach((item) => {
      item.pause();
    });
  }
};

// ###
$(document).ready(function () {
  $("[data-work-items]").slice(0, 15).show();

  $("[data-work-loading]").click(function (e) {
    e.preventDefault();
    $("[data-work-items]:hidden").slice(0, 15).fadeIn("slow");

    if ($("[data-work-items]:hidden").length == 0) {
      $("[data-work-loading]").fadeOut("");
    }
  });

  // $(window).scroll(function () {
  //   if (
  //     $(window).scrollTop() + $(window).height() >=
  //     $(document).height() - 50
  //   ) {
  //     $("[data-work-items]:hidden").slice(0, 15).fadeIn("slow");
  //   }
  //   if ($("[data-work-items]:hidden").length == 0) {
  //     $("[data-work-loading]").fadeOut("");
  //   }
  // });
});

// ===== form =====
$("#js-checkbox").change(function () {
  let isCheck = this.checked;
  if (isCheck) {
    $(this).addClass("active");
    $(".js-send").addClass("active");
  } else {
    $(this).removeClass("active");
    $(".js-send").removeClass("active");
  }
});

// ===== init =====
const init = () => {
  // #
  $("body").fadeIn("slow");
  $("body").addClass("is-flex");
  // # app-height
  appHeight();
  // # lenis
  // initLenis();
};

// ===== lazy loading =====
const ll = new LazyLoad({
  threshold: 0,
});

// ### ===== DOMCONTENTLOADED ===== ###
window.addEventListener("DOMContentLoaded", init);

document.addEventListener('DOMContentLoaded', function () {
  const videos = document.querySelectorAll('.top_video video');
  const scrollIndicator = document.querySelector('.top_scroll');

  if (videos.length > 0 && scrollIndicator) {
      videos.forEach(video => {
          // 動画終了時に表示
          video.addEventListener('ended', function () {
              scrollIndicator.style.display = 'block'; // 表示
              scrollIndicator.style.opacity = 1; // フェードイン効果
          });

          // 初期状態を非表示に設定
          scrollIndicator.style.display = 'none';
          scrollIndicator.style.opacity = 0;
      });
  }
});
