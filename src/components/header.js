import { Link } from "gatsby"
import PropTypes from "prop-types"
import React from "react"

const Header = ({ siteTitle }) => (
  <header
    style={{
      background: `linear-gradient(to right, #00ffff, #f0f, #ff0, #00ffff)`,
      marginBottom: `1.45rem`,
    }}
  >
    <div
      style={{
        margin: `0 auto`,
        maxWidth: 960,
        padding: `1.45rem 1.0875rem`,
        display: `flex`,
        justifyContent: `space-between`
      }}
    >
      <h1 style={{ margin: 0, fontSize: `1.2rem` }}>
        <Link
          to="/"
          style={{
            color: `black`,
            textDecoration: `none`,
          }}
          >
          {siteTitle.slice(0,14)}
        </Link>
      </h1>
      <nav>
        <Link
          to="/business-cards"
          style={{
            color: `black`,
            textDecoration: `none`,
            marginRight: `2rem`
          }}
          >
            Business Cards
          </Link>
        <Link
          to="/banners"
          style={{
            color: `black`,
            textDecoration: `none`,
            marginRight: `2rem`
          }}
          >
            Banners
          </Link>
        <Link
          to="/window-graphics"
          style={{
            color: `black`,
            textDecoration: `none`,
            marginRight: `2rem`
          }}
          >
            Window Graphics
          </Link>
        <Link
          to="/websites"
          style={{
            color: `black`,
            textDecoration: `none`,
          }}
          >
            Web Sites
          </Link>
      </nav>
    </div>
  </header>
)

Header.propTypes = {
  siteTitle: PropTypes.string,
}

Header.defaultProps = {
  siteTitle: ``,
}

export default Header
