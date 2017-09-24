# Tables

## The inevitable HTML **table**, with special case cells


# Design better data tables
**The ingredients of a successful data table UI**


> Good data tables allow users to scan, analyze, compare, filter, sort, and manipulate information to derive insights and commit actions.

Data is useless without the ability to visualize and act on it. The success of future industries will couple advanced data collection with a better user experience, and the data table comprises much of this user experience.

Good data tables allow users to scan, analyze, compare, filter, sort, and manipulate information to derive insights and commit actions. This article presents a list of design structures, interaction patterns, and techniques to help you design better data tables.

## Fixed Header

Fixing the row header as a user scrolls provides context on what column the user is on.

## Horizontal Scroll

Horizontal scrolling is inevitable when presenting large datasets. It is good practice to place identifier data in the first column. As an advanced feature, enable individual locking of columns so users can compare data with multiple anchoring identifiers.

## Resizable columns


Resizing columns allows users to see abbreviated data in full.

## Row Style
**Zebra Stripes, Line Divisions, Free Form.**

The row style helps users scan data. Reducing visual noise by removing row lines or zebra stripes works well for small datasets. Users may lose their place when parsing larger datasets. Line divisions help users keep their place. Alternating rows (aka zebra stripes) help users keep their place when scanning long horizontal datasets. Although they cause usability problems when there is a small number of rows because users may ascribe meaning to the highlighted rows. Smaller row height enables the user to view more data without the need for scrolling. However, is effects scannability leading to visual parsing errors. That is why many successful data table designs incorporate the ability to control display density.

## Display Density

Smaller row height enables the user to view more data without the need for scrolling. However, is effects scannability leading to visual parsing errors. That is why many successful data table designs incorporate the ability to control display density.

## Visual Table Summary

A visual data summary provides an overview of the accompanying table. It allows the user to spot patterns and issues in aggregate before actioning summary insights.

## Pagination

Pagination works by presenting a set number of rows in a view, with the ability to navigate to another set. The above example provides the ability to customize the row count per view. This pattern is often replaced by infinite scroll. Infinite scroll progressively loads results as a user scrolls. Infinite scroll works well for discovery websites, but is often disastrous for prioritization apps.

## Hover Actions

Presenting additional action when a user hovers reduces visual clutter. However, it can cause discoverability issues because the user needs to interact with the table to expose the presentation of actions.

## Inline Editing

Inline editing allows the user to change data without navigating to a separate details view.

## Expandable Rows

Expandable rows allows the user to evaluate additional information without loosing their context.

## Quick View

Much like expandable rows, quick view enables a user to view additional information while staying in-context.

## Modal

Modals allow the user to stay within the table view, but provides more focus to the additional information and actions.

## Multi-Modal

A multi-modal feature is powerful for active use users to crank through a number of actions, or compare details of disparate items.

## Row to Details

Clicking on a row link transforms the table into a view with list items on the left and additional details on the right. It enables a user to parse large datasets, as well as reference many items without losing their place.

## Sortable Columns

Column sorting allows users to organize rows alphabetically and numerically.

## Basic Filtering

Basic filtering allows users to manipulate the data presented in the table.

## Filter Columns

This design pattern allows users to assign filtering parameters to specific columns.

## Searchable Columns

This design pattern allows a user to search specific values within each column.

## Add Columns

This pattern allows users to add columns from a dataset. It is a way to keep the table’s data limited to essential information, and allows the user to add additional columns based on their use case.

## Customizable Columns

The customizable columns feature enables users to pick the columns they want to see and sort accordingly. The feature may include the ability to save presets for later use.


[1]: https://archive-2_1_4.lightningdesignsystem.com/components/data-tables
[2]: https://uxdesign.cc/design-better-data-tables-4ecc99d23356



