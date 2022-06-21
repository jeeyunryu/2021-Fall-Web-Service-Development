<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
    <body style="font-family:sans-serif">
        <h2>My CD Collection - Price Decreasing Sorting</h2>
            <table border="1">
                <tr>
                    <th bgcolor="#9acd32">Title</th>
                    <th bgcolor="#9acd32">Language</th>
                    <th bgcolor="#FFFF00">Price</th>
                    <th bgcolor="#00FFFF">Sale</th>
                </tr>
                <xsl:for-each select="bookstore/book">
                <xsl:sort select="price" order="descending"/>
                    <tr>
                        <td>
                            <xsl:value-of select="title"/>
                        </td>
                        <td style="text-align:center; color:blue">
                            <xsl:value-of select="title/@lang"/>
                        </td>
                        <xsl:choose>
                            <xsl:when test="price>30">
                                <td style="color: red">
                                    <xsl:value-of select="price"/>
                                </td>
                            </xsl:when>
                            <xsl:otherwise>
                                <td>
                                    <xsl:value-of select="price"/>
                                </td>
                            </xsl:otherwise>
                        </xsl:choose>
                        <td>
                            <xsl:value-of select="price/@sale"/>
                        </td>
                    </tr>
                </xsl:for-each>
            </table>

        <h2>Sale of Each CD Title</h2>
            <xsl:for-each select="bookstore/book">
                <p style="color:green; font-size: 25px">
                    <xsl:value-of select="title"/>
                    <xsl:value-of select="price/@sale"/>
                </p>
            </xsl:for-each>

        <h3>language attribute values</h3>
            <xsl:for-each select="bookstore/book">
                <p>
                    <xsl:value-of select="title"/>
                    <span>; language: </span>
                    <xsl:value-of select="title/@lang"/>
                </p>
            </xsl:for-each>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>
  
