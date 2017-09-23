module.exports = function formatRating (val) {
    const num = parseFloat(val)
    return num.toFixed(1)
}
