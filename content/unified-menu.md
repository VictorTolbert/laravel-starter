# Unified Menu

Description: Create database to host app/menuitem/URL information
Acceptance Criteria: A database with tables will be created to accommodate the needs of unified menu. 

1. Need to store App information
2. Need to store Menu information and App-Menu relationship
3. Need to be able to accommodate multiple levels of submenus
4. Need to store Role-Menu relationship

## App

- id
- external_id
- code (example: Sellers, Buyers, etc.)
- description
- hostname  (example: ssp.videa.tv)

## Role (existing in VideaPlatform)

- Add ExternalID

## App-MenuItem

- AppID
- MenuItemID
- ParentItemID
- SortOrder
- Title
- LinkAppID
- URL
- Description

## Role-MenuItem
  
- RoleExternalID
- MenuItemID

PBI: Unified Menu - Create a gRPC service to retrieve menu
Description: Given App name and User Id, return a set of menus and menu items in gRPC response. If the menu rendering logic depends on more than just list of roles, it is the application's responsibility to hide the non applicable menu or menu items.
Acceptance Criteria: Application can call the gRPC service and pass in App Code and User Id.
Proto definition of global navigation data and services:


Note:
How do you pass in some parameters for the controller?  The application will need to merge the URL with parameters.  The application may provide a template with the URL.
