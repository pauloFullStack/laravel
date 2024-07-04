export const checkDeviceType = () => {

    let platform = "";
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    if (/android/i.test(userAgent)) {
        platform = "Android";
    } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        platform = "iOS";
    } else {
        platform = "Desktop";
    }

    let deviceType = "";
    if (/mobile/i.test(userAgent) && platform === "Android") {
        deviceType = "Android Mobile";
    } else if (/mobile/i.test(userAgent) && platform === "iOS") {
        deviceType = "iOS Mobile";
    } else if (/tablet/i.test(userAgent)) {
        deviceType = "Tablet";
    } else {
        deviceType = "Desktop";
    }

    return { platform, deviceType };

}