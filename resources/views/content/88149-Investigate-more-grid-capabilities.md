# 88149 Investigate more grid capabilities

## Requirements

1.  Hide/show columns via popup;
2.  Reorder columns via pop;
3.  Adjust the row height of all grid rows (popup);
4.  Change the width of columns by dragging;
5.  Sort on multiple columns;
6.  Save settings of each table for each user in the DB;
7.  Acceptable performance;

## Technical Requirements

1.  Support of custom html/css templates for headers/columns with directives;
2.  Support of fixed headers and footers, floating scrolls and other grid directives;
3.  Support of colspan and rowspan on cells and rows;
4.  Support of nested grids;

## Data Storage

Data-object settings of a grid will looks like:

```js
self.gridSettings = {
    rowHeight: 50,
    columns: {
        name: {
            index: 1, 
            key: "name", 
            columnName: "name", 
            columns: {
                firstName: { 
                    index: 1, 
                    key: "firstName", 
                    title: "firstName", 
                    columnName: "firstName" 
                },
                lastName: { 
                    index: 2, 
                    key: "lastName", 
                    title: "lastName", 
                    columnName: "lastName" 
                }
            }
        },
        company: { 
            index: 3, 
            key: "company", 
            title: "company", 
            columnName: "company" 
        },
        isActive: { 
            index: 4, 
            key: "isActive", 
            title: "isActive", 
            columnName: "isActive", 
            isHidden: true, 
            width: 40 
        }
    }
};
```

## Description of fields:

`rowHeight` – height of rows in a grid;

Columns:
| Columns      |                                                                       |
|--------------|-----------------------------------------------------------------------|
| `index`      | order of a column, most of time will be skipped and will be set within `slds-grid` directive, see OM feature/draft-angular-ui-grid slds-grid.js processSettings() method.
| `key`        | id of column (can be renamed to id). Is needed to match settings of column from DB with default values in case is columnName will be changed.
| `columnName` | an old property, which means name of the column in DB.
| `title`      | a text filed which is required for slds-sorting-column directive.
| `isHidden`   | true if a filed is hidden.
| `width`      | width of a filed (int (px) or string like ‘5rem’ or ‘5%’).
| `columns`    | this field is needed for fields like the next one (Makegood):


Index of first nested column must be the same with index of parent (see indexes in the data object above). Sounds weird, but in the most cases indexes won’t be set manually. The rest of properties of nested columns must be the same like on parents.
For storing of the data the next DB schema must be implemented:


Potentially will be created one stored procedure which will get settings of a table by user_external_id and ui_table.key and the second one which will save them.
